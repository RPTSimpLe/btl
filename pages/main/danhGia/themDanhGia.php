<?php
    include "../../../admincp/config/connect.php";
    $danhGia=$_POST['danhGia'];
    $sp=$_POST['sp'];
    $kh=$_POST['kh'];

    $sql_them="INSERT INTO tbl_danhgia(id_sanpham,id_khachhang,noidung) 
                    VALUE ('".$sp."','".$kh."','".$danhGia."')";
    mysqli_query($connect,$sql_them);
    header('Location:../../../index.php?quanly=sanpham&id='.$sp);
?>