<?php
    session_start();
	include('../admincp/config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['taikhoan'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky ,tbl_admin WHERE tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."'  LIMIT 1";
		$row = mysqli_query($connect,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['taikhoan'];
			$_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang']= $row_data['id_khachhang'];
			header("Location:../index.php");
		}elseif($taikhoan=='admin'){
            header("Location:../admincp/login.php");
        }else{
			$message = "Tài khoản mật khẩu không đúng";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
            integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <title>Đăng nhập</title>
    <style>
.login{
    display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url(../images/bnn.jpg);
  background-repeat: no-repeat;  
  font-size: 14px;
}
.login_box {
    height: 78%;
    position: absolute;
    top: 51%;
    left: 50%;
    transform: translate(-50%,-50%);
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
    display: flex;
    overflow: hidden; 
}
.login_box .left{
    max-width: 303px;
    background: transparent;
    background-color: rgba(0, 0, 0, 0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
  width: 100%;
  height: 100%;
  padding: 25px 25px;
  /* background: url(https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat bottom; */

}
.login_box .right{
  width: 59%;
  height: 100%  
}
.left .top_link a {
    color: #fff;
    font-weight: 400px;
    display: flex;
    align-items: center;
}
.left .top_link{
  height: 10px
}
.left .contact{
	display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 80%;
    margin: auto;
    color: #fff;
}
.left h2{
  text-align: center;
  margin-bottom: 40px;
  
}
.left input {
    border: none;
    width: 70%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600px;
    font-size: 17px;
    outline: none;
    color: #fff;
}
.left{
	background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit {
    border: none;
    padding: 10px 50px;
    border-radius: 5px;
    display: block;
    margin: auto;
    margin-top: 50px;
    background: rgba(88,54,114,1);
    color: #fff;
    font-weight: bold;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    transition: all 0.3s ease;
}
.admin{
    margin-left: 95px;
    margin-top: 15px;
}
.admin a{
    color: white;
}
.admin a:hover{
    color: rgba(88,54,114,1);
}
.submit:hover{
    background-color: white;
border: 1px solid black;
color: black;
  cursor: pointer;
}
.top_link a:hover{
    color: rgba(88,54,114,1);
}
.top_link img {
    width: 28px;
    padding-right: 7px;
}

    </style>
</head>
<body>
<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="../index.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Về trang chủ</a></div>
				<div class="contact">
					<form action="" method="POST">
						<h2>ĐĂNG NHẬP</h2>
						<input type="text" name="taikhoan" placeholder="Tên đăng nhập">
						<input type="password" name="password" placeholder="Mật khẩu">
						<button class="submit" name="dangnhap">ĐĂNG NHẬP</button>
                       <div class="admin"> <a href="../admincp/login.php">Admin?</a> </div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>