<?php
    include "../../config/connect.php";
    $tendanhmuc=$_POST['tendanhmuc'];
    $thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them="INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tendanhmuc."','".$thutu."'); ";
        mysqli_query($connect,$sql_them);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_sua="UPDATE tbl_danhmuc SET tendanhmuc='".$tendanhmuc."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($connect,$sql_sua);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa="DELETE FROM tbl_danhmuc WHERE id_danhmuc ='".$id."';";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>