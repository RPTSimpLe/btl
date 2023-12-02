<style>
    .fa-map-marker,.fa-shopping-cart{
        color: grey !important;
    }
    th{
        text-align: center;
    }
    .table td, .table th{
        vertical-align: middle;
    }
</style>
<div class="container">
    <div class="container">
        <?php
        if(isset($_SESSION['id_khachhang'])){
            ?>
            <?php
        }
        ?>
        <form action="thanhtoan.php" method="POST">
            <div class="row">
                <h5>Giỏ hàng của bạn</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Mã</th>
                        <th>Tên</th>
                        <th>Hình</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Thành tiền</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php
                    if(isset($_SESSION['cart'])){
                        $i=0;
                        $tongtien=0;
                        foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
                            $tongtien+=$thanhtien;
                            $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <!-- ở đây lấy dữ liêu cart_item['masp'] từ themgiohang.php -->
                                <td><?php echo $cart_item['masp']?></td>
                                <td><?php echo $cart_item['tensanpham'] ?></td>
                               <td style="text-align: center"><img src="../../../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="150px"></td>

                               <td style="text-align: center"><?php echo $cart_item['soluong'] ?> </td>

                                <td><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
                                <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
                                <td style="text-align: center"><a href="../giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>" class="btn btn-danger">Xóa</a></td>
                            </tr>


                            <?php
                        }
                        ?>

                        <tr>
                            <td colspan="8" style="position: relative">
                                <p style="float: left text-align: center; position: absolute; top: 25%;font-size: 17px;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                                <p style="float: right;"><a href="../giohang/xoahetgiohang.php?xoatatca=xoahet" class="btn btn-danger">Xóa Hêt</a></p>
                                <div style="clear:both;"> </div>
                            </td>
                        </tr>
                        <?php
                    }else{
                        ?>
                        <tr>
                            <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>

                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </div>
            <style type="text/css">
                .col-md-4.hinhthucthanhtoan .form-check {
                    margin: 11px;
                }
            </style>

            <div class="col-md-4 hinhthucthanhtoan">
                <h4>Phương thức thanh toán</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="Tiền Mặt" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Thanh toán khi nhận hàng
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="Chuyển Khoản">
                    <label class="form-check-label" for="exampleRadios2">
                        Thanh toán online
                    </label>
                </div>
                <input type="submit" value="Thanh toán ngay" name="redirect"  class="btn btn-success">

        </form>

        <p></p>

        <?php
        $tongtien = 0;
        foreach($_SESSION['cart'] as $key => $value){
            $thanhtien = $value['soluong']*$value['giasanpham'];
            $tongtien+=$thanhtien;
        }
        $tongtien_vnd = $tongtien;
        $tongtien_usd = round($tongtien/22667);
        ?>
        <input type="hidden" name="" value="<?php echo $tongtien_usd ?>" id="tongtien">


    </div>

</div>
<?php


?>


</div>