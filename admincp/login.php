<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['usernamez'];
		$matkhau = md5($_POST['password']);
        $sql_nguoidung = "SELECT * FROM tbl_dangky ,tbl_admin WHERE (tbl_dangky.taikhoan='".$taikhoan."' AND tbl_dangky.matkhau='".$matkhau."' AND tbl_dangky.chucvu=1) OR (tbl_admin.username='".$taikhoan."' AND tbl_admin.password='".$matkhau."' ) LIMIT 1";
		$row_nguoidung = mysqli_query($connect,$sql_nguoidung); 
        $count = mysqli_num_rows($row_nguoidung);
        
           if($count>0){
                $_SESSION['dangnhap']=$taikhoan;
                header("Location:index.php");
            }else{
                $message = "Tài khoản mật khẩu không đúng";
                echo "<script type='text/javascript'>alert('$message');</script>";
                // header("Location:login.php");
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
    <title>Admin</title>
</head>
<body>
<div class="top_link"><a href="../index.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Về trang chủ</a></div>
<form class="login" action="" method="POST">
  <h2 style="text-align: center ;color:black;">ADMIN LOGIN</h2>
  <input type="text" placeholder="Username*" name="usernamez">
  <input type="password" placeholder="Password*" name="password">
  <button type="submit" name="dangnhap" >Login</button>
</form>
</body>
</html>