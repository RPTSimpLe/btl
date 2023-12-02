<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
    if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*10)-10;
	}
    // GET id là lấy id từ bên MENU.php 
    $sql_show ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,10";
    $query_show =mysqli_query($connect,$sql_show);
   

?>




<ul class="product_list">

    <?php
        while ($row=mysqli_fetch_array($query_show)){
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
<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    padding: 0;
					    margin: 0;
					    list-style: none;
						display:flex;justify-content: center;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: burlywood;
					    display: block;
					}
					ul.list_trang li a {
					    color: #000;
					    text-align: center;
					    text-decoration: none;
					 
					}
				</style>
				<?php
				$sql_trang = mysqli_query($connect,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/10);
				?>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<a style="color:white" href="index.php?trang=<?php echo $i ?>"><li <?php if($i==$page){echo 'style="background: brown;"';}else{ echo ''; }  ?>><?php echo $i ?></li></a>
					<?php
					} 
					?>
					
				</ul>