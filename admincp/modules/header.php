<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<style>
	.dangxuat p{
		float:right;
		width:170px;
		height:30px;
		background-color:#fff;
		border-radius:5px ;
		text-align: center ;
		margin-top:-60px;
		align-items: center;
		margin-right:30px;
		border:1px solid black;

		
	}
	.dangxuat p:hover{
		border:5px solid green;
	}
	.dangxuat > p>a{
		text-decoration: none;
		font-size: 20px;
		color:black;
		
	}
	
</style>
<div class="dangxuat">
<p ><a href="index.php?dangxuat=1"><b>Đăng xuất :</b> <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></p>
</div>