<?php
$severname="localhost";
$username="root";
$password="";
$database="fresh_garden";
$port = 3307; // Chuyển thành kiểu int

$connect = new mysqli("localhost","root", "", "fresh_garden", 3307);
if (mysqli_connect_errno()) {
    echo "Lỗi kết nối: " . mysqli_connect_error();
    exit();
}

?>