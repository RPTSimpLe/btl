<?php

$connect = new mysqli("localhost","root", "", "fresh_garden");
if (mysqli_connect_errno()) {
    echo "Lỗi kết nối: " . mysqli_connect_error();
    exit();
}

?>