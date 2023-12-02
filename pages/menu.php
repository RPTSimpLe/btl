<?php
     $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
     $query_danhmuc=mysqli_query($connect,$sql_danhmuc);   
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="menu">
    <div     class="menu_list">
        <ul    class="menu_list-left">
         <li class="menu" style="font-size:40px;"> <a href="index.php"><img src="images\iconlogo.png" style="height:40px;width:40px;border-radius:50%; margin-bottom: 10px;"></a></li>

                <li class="menu"> <a href="index.php?quanly=giohang">Giỏ hàng</a></li>
                <li class="menu"><a href="">Danh mục</a>
                        <ul class="menu_danhmuc">
                        <?php
                                while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){

                                ?>
                                <li> <a href="index.php?quanly=danhmuclist&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>

                                <?php
                                    }

                                ?>
                        </ul>
                </li>
                <li class="menu"> <a href="index.php?quanly=contact">Liên hệ </a></li>
                <li> 
                    <Form method="POST" action="index.php?quanly=timkiem"> 
                        <input type="text" style="border-radius: 10px; height:40px;" class="menu-input-text" placeholder="Tìm kiếm....." name="tukhoa">
                        <input type="submit" style="border-radius: 10px; height:40px;" class="menu-input-submit" name="timkiem" value="Tìm Kiếm">
                    </Form>
                </li>
        </ul>
        <ul style="float: right;" class="menu_list-right">
            <?php
                if(isset($_SESSION['dangky'])){
                ?>
                    <li><a href="index.php?quanly=donhang">Đơn hàng</a></li>
                    <li><a href="index.php?quanly=thongtin"> Thông tin</a></li>
                    <li> <a href="index.php?dangxuat=1">Đăng xuất</a></li>
                <?php
                    }else{
                ?>
                     <li> <a href="index.php?quanly=dangnhap">Đăng nhập</a></li>
                     <li> <a href="index.php?quanly=dangky">Đăng ký</a></li>
                <?php
                    }
            ?>
        </ul>
    </div>
 </div>
