<style>
    .fa-money-check-alt,.fa-shopping-cart{
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
    <h4>Thông tin vận chuyển</h4>


    <?php
    $id_dangky = $_SESSION['id_khachhang'];
    $sql_get_vanchuyen = mysqli_query($connect,"SELECT * FROM tbl_dangky WHERE id_khachhang='$id_dangky' LIMIT 1");


    if($id_dangky!=''){
        $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        $name = $row_get_vanchuyen['hovaten'];
        $phone = $row_get_vanchuyen['sodienthoai'];
        $address = $row_get_vanchuyen['diachi'];
        $note = $row_get_vanchuyen['email'];
    }else{

        $name = '';
        $phone = '';
        $address = '';
        $note = '';
    }
    ?>

    <div >

        <ul>
            <li>Khách hàng: <b><?php echo $name ?></b></li>
            <li>Số điện thoại : <b><?php echo $phone ?></b></li>
            <li>Địa chỉ : <b><?php echo $address ?></b></li>
            <li>email : <b><?php echo $note ?></b></li>
        </ul>
        <h4>Nếu bạn muốn đổi địa chỉ tài khoản hãy liên hệ shop ở phần Contact nhé</h4>
        <!--GIO HANG---->
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Mã</th>
                <th>Tên sản phẩm</th>
                <th>Hình sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
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
                        <td><?php echo $cart_item['masp']?></td>
                        <td><?php echo $cart_item['tensanpham'] ?></td>
                        <td style="text-align: center"><img src="../../../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>" width="150px"></td>
                        <td style="text-align: center"> <?php echo $cart_item['soluong'] ?></td>
                        <td><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></td>
                        <td><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></td>
                        <td style="text-align: center"><a href="../giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>" class="btn btn-danger">Xóa</a></td>
                    </tr>

                    <?php
                }
                ?>

                <tr>
                    <td colspan="8">
                        <p style="float: left;"> Tổng tiền : <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></p>
                        <p style="float: right;"><a href="../giohang/xoahetgiohang.php?xoatatca=xoahet" class="btn btn-danger">Xóa Hết</a></p>
                        <div style="clear: both;"> </div>

                        <?php
                        if(isset($_SESSION['dangky'])){

                            ?>
                            <p><a href="index.php?quanly=thongtinthanhtoan" class="btn btn-success">Hình thức thanh toán</a></p>
                            <?php
                        }else{

                            ?>
                            <p><a href="index.php?quanly=dangky">Đăng kí đặt hàng</a></p>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }else{
                ?>
                <tr>
                    <td colspan="6">Hiện tại giỏ hàng trông</td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</div>

</div>