

<?php
    
    
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $result_lietke_sp= mysqli_query($connect,$sql_lietke_sp);
?>
<p style="font-size:30px;"><b>Liệt kê danh mục sản phẩm</b></p>
<hr style="margin-top:-20px;">
 <table style="width: 100%;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <td>ID</td>
         <td>Tên sản phảm</td>
         <td>Hình ảnh </td>
         <td>Giá sản phẩm</td>
         <td>Số lượng</td>
         <td>Danh mục</td>
         <td>Mã sản phẩm</td>
         <td>Tóm tăt</td>
         <td>Trạng thái</td>
         <td style="padding:2px 2px 2px 2px 2px; text-align:center">Quản lý</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td style="width:80px;height:150px; text-align: center;">
                            <?php echo $row['tensanpham'] ?>   
         </td>
         
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center;">
                            <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
         </td>
         <td><?php echo $row['soluong'] ?>      </td>
         <td><?php echo $row['tendanhmuc'] ?>      </td>
         <td><?php echo $row['masanpham'] ?>    </td>
         <td><?php echo $row['tomtat'] ?>       </td>
         <td><?php if($row['trangthai']==1){
                echo "Mới";
         }else{
                echo "Cũ";
         }?>
         </td>
         <td style="width:100px;">
            <a style="text-decoration:none;" href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>"><button>Xóa</button> </a>|
             <a style="text-decoration:none;" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham']?>"><button>Sửa</button></a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>