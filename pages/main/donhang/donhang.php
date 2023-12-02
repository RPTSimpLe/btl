<?php
$id_khachhang = $_SESSION['id_khachhang'];
$sql_lietke_dh="SELECT tbl_giohang.*,tbl_dangky.* FROM tbl_giohang 
        join tbl_dangky on tbl_dangky.id_khachhang = tbl_giohang.id_khachhang
        WHERE tbl_giohang.id_khachhang = ".$id_khachhang;
$dhs= mysqli_query($connect,$sql_lietke_dh);
?>
<style>
    .maincontent img{
        width: 100px;
        height: 100px;
    }
    th{
        text-align: center !important;
    }
    .table td, .table th{
        vertical-align: middle !important;
    }
</style>
<div class="container">
    <?php
    while($row=mysqli_fetch_array($dhs)){
        $sql_lietke_dh="SELECT tbl_cart_detail.*,tbl_sanpham.tensanpham, tbl_sanpham.masanpham, tbl_sanpham.giasanpham,tbl_sanpham.hinhanh
        FROM tbl_cart_detail
        join tbl_sanpham on tbl_sanpham.id_sanpham = tbl_cart_detail.id_sanpham
        WHERE tbl_cart_detail.code_cart = ".$row["code_cart"];
        $chitiet= mysqli_query($connect,$sql_lietke_dh);
        ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="text-align: left !important;" scope="col">STT</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Đơn giá</th>
                <th scope="col">Thành tiền</th>
                <th scope="col">Đánh giá</th>
            </tr>
            </thead>
            <tbody>
    <?php
        while($ct=mysqli_fetch_array($chitiet)){
            $tongtien=0;
            $i=1;
            $thanhtien= $ct['giasanpham'] * $ct['soluongmua'];
            $tongtien+=$thanhtien;
    ?>
                <tr>
                    <th style="text-align: left !important;"  scope="row"><?php echo $i; ?></th>
                    <td> <img src="admincp/modules/quanlysp/uploads/<?php echo $ct["hinhanh"]; ?>"></td>
                    <td><?php echo $ct['tensanpham']?></td>
                    <td><?php echo $ct['soluongmua']?></td>
                    <td><?php echo number_format($ct['giasanpham'],0,',','.').'VNĐ' ?></td>
                    <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
                    <?php
                    $sql_lietke_dh="SELECT * FROM tbl_sanpham 
                            WHERE tensanpham = '".$ct['tensanpham']."'";
                    $sanpham= mysqli_query($connect,$sql_lietke_dh);
                    if ($ct["danhGia"]==0){
                           while ($sp=mysqli_fetch_array($sanpham)){
                               echo '<td colspan="5" style="text-align: right"><a class="btn btn-info" href="index.php?quanly=sanpham&id='.$sp["id_sanpham"].'&kh='.$id_khachhang.'&cart='.$ct["id_cart_detail"].'">Đánh giá</a></td>';
                           }
                    }else{
                        echo '<td colspan="5" style="text-align: right">Đã đánh giá</td>';
                    }
                    ?>
                </tr>
    <?php
        }
        ?>
                <tr>
                    <td><b>Tổng tiền </b></td>
                    <td colspan="6" style="text-align: right"><?php echo number_format($tongtien,0,',','.').'VNĐ' ?></td>
                </tr>
                <tr class="row1">
                    <td><b>Mã đơn hàng</b></td>
                    <td colspan="6" style="text-align: right"><?php echo $row['code_cart'] ?></td>
                </tr>
                <tr class="row1">
                    <td><b>Tên khách hàng</b></td>
                    <td colspan="6" style="text-align: right"><?php echo $row['hovaten']?></td>
                </tr>
                <tr class="row1">
                    <td><b>Địa chỉ</b></td>
                    <td colspan="6" style="text-align: right"><?php echo $row['diachi']?></td>
                </tr>
                <tr class="row1">
                    <td><b>Hình thức thanh toán</b></td>
                    <td colspan="6" style="text-align: right"><?php echo $row['cart_payment']?></td>
                </tr>
                <tr class="row1">
                    <td ><b >Điện thoại</b></td>
                    <td colspan="6" style="text-align: right"><?php echo $row['sodienthoai']?></td>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
</div>