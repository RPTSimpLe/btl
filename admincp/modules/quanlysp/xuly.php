<?php
    include "../../config/connect.php";
    $tensanpham=$_POST['tensanpham'];
    $masanpham=$_POST['masp'];
    $giasanpham=$_POST['giasp'];
    $soluong=$_POST['soluong'];
     //xử lý hình anh
    $file=$_FILES['hinhanh'];
    $hinhanh=$file['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    $hinhanhgio=time().'_'.$hinhanh;
    $tomtat = $_POST['tomtat'];
    $noidung=$_POST['noidung'];
    $hienthi=$_POST['hienthi'];
    $danhmuc=$_POST['danhmuc'];
    
   

    

    if(isset($_POST['themsanpham'])){

        


        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                
                $sql_themsp="INSERT INTO tbl_sanpham(tensanpham,masanpham,giasanpham,soluong,hinhanh,tomtat,noidung,trangthai,id_danhmuc) 
                VALUE ('".$tensanpham."','".$masanpham."','".$giasanpham."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."',".$hienthi.",'".$danhmuc."')";
                mysqli_query($connect,$sql_themsp);
                header('Location:../../index.php?action=quanlysanpham&query=them');
        
            }else{
                $hinhanh='';
                header('Location:../../index.php?action=quanlysanpham&query=them');
            }
        }
       

    }
    
    
    
    
    
    elseif(isset($_POST['suasanpham'])){
        if($hinhanh!=''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_sua="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masanpham='".$masanpham."',
            giasanpham='".$giasanpham."',soluong='".$soluong."',hinhanh='".$hinhanh."',
            tomtat='".$tomtat."',noidung='".$noidung."',trangthai='".$hienthi."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
            
            $sql="SELECT*FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
            $query=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_array($query)){
                unlink('uploads/'.$row['hinhanh']);
            }
        
        }else{
            $sql_sua="UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masanpham='".$masanpham."',
            giasanpham='".$giasanpham."',soluong='".$soluong."',tomtat='".$tomtat."',
            noidung='".$noidung."',trangthai='".$hienthi."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
        }  
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
    
    
    
    
    else{
        
        $id=$_GET['idsanpham'];
        $sql="SELECT *FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
        $query=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa="DELETE FROM tbl_sanpham WHERE id_sanpham ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlysanpham&query=them');
    }
?>