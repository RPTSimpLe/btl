<?php
    // GET id là lấy id từ bên MENU.php 
    $sql_show_new ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.trangthai=1 ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 5";
    $query_show_new =mysqli_query($connect,$sql_show_new);
?>

<ul class="product_list">
    <?php
        while ($row=mysqli_fetch_array($query_show_new)){
    ?>
        <li>
            <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                <p></p>
                <h5 class="title_product"> <?php echo $row['tensanpham'] ?></h5>
                <h5 class="price_product">Giá: <?php echo number_format($row['giasanpham'],0,',','.').' VNĐ' ?></h5>
                <p style="text-align: center;"><?php echo "Xem chi tiết"?></p>
            </a>
        </li>
    <?php
        }
    ?>
</ul>
