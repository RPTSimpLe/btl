<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_qlsp_them.css">
</head>

<body>
<?php
// Lấy thời gian hiện tại dưới dạng Unix timestamp
$currentTime = date('Y-m-d ');

?>
    <?php

    //----------------------số sản phẩm --------------------

    $sql_lietke_sanpham = "SELECT COUNT(*) AS total_products FROM tbl_sanpham";
    $result_lietke_sanpham = mysqli_query($connect, $sql_lietke_sanpham);

    if ($result_lietke_sanpham) {
        $row = mysqli_fetch_assoc($result_lietke_sanpham);
        $total_products = $row['total_products'];
    } else {
        echo "Không thể thực hiện truy vấn: " . mysqli_error($connect);
    }


    //----------------------số dơn hàng --------------------
    $sql_lietke_donhang = "SELECT COUNT(tbl_giohang.id_cart) AS total_items 
    FROM tbl_giohang 
    INNER JOIN tbl_dangky ON tbl_giohang.id_khachhang=tbl_dangky.id_khachhang";

    $result_lietke_donhang = mysqli_query($connect, $sql_lietke_donhang);

    if ($result_lietke_donhang) {
        $row = mysqli_fetch_assoc($result_lietke_donhang);
        $total_items  = $row['total_items'];
    } else {
        echo "Không thể thực hiện truy vấn: " . mysqli_error($connect);
    }

    //----------------------doanh thu--------------------
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    $sql_lietke_doanhthu = "SELECT * 
    FROM tbl_cart_detail 
    INNER JOIN tbl_sanpham ON tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham
    INNER JOIN tbl_giohang ON tbl_cart_detail.code_cart=tbl_giohang.code_cart
    ORDER BY tbl_cart_detail.id_cart_detail DESC";


    $result_lietke_doanhthu = mysqli_query($connect, $sql_lietke_doanhthu);
    $i = 0;
    $tongtien = 0;
    while ($row = mysqli_fetch_array($result_lietke_doanhthu)) {
        $i++;
        $thanhtien = $row['giasanpham'] * $row['soluongmua'];
        $tongtien += $thanhtien;
    }
    ?>
    <div style="display:flex; width:1000px;">
        <div style="width:300px;"></div>
        <div style="width:300px;"></div>
        <!-- <div style="width:250px; text-align:center;font-size:30px;"><b>^</b></div> -->
        <div style="width:260px;"></div>
    </div>

    <p style="font-size:30px;"><b>Thống kê</b></p>
    <hr style="margin-top:-20px;">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Thời gian</th>
            <th>Số sản phẩm</th>
            <th>Số đơn hàng</th>
            <th>Doanh thu</th>
        </tr>
        <tr>
            <td style="height:100px;">1</td>
            <td><?php echo $currentTime ?></td>
            <td><?php echo $total_products; ?></td>
            <td><?php echo $total_items; ?></td>
            <td><?php echo number_format($tongtien, 0, ',', '.') . 'VNĐ' ?></td>

        </tr>
    </table>

</body>

</html>