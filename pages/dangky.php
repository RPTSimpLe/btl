 <p>Trang đăng ký</p>


<p>Đăng ký thành viên</p>
<style type="text/css">
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<form action="" method="POST">
<table class="dangky"  width="50%" style="border-collapse: collapse;">
	<tr>
		<td>Họ và tên</td>
		<td><input type="text" size="50" name="hovaten"></td>
	</tr>
    <tr>
		<td>Tài khoản</td>
		<td><input type="text" size="50" name="taikhoan"></td>
	</tr>
    <tr>
		<td>Mật khẩu</td>
		<td><input type="password" size="50" name="matkhau"></td>
	</tr>
    <tr>
		<td>Nhập lại mật khẩu</td>
		<td><input type="password" size="50" name="rematkhau"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size="50" name="email"></td>
	</tr>
	<tr>
		<td>Điện thoại</td>
		<td><input type="text" size="50" name="dienthoai" ></td>
	</tr>
	<tr>
		<td>Địa chỉ</td>
		<td><textarea name="diachi"  cols="30" rows="10"></textarea></td>
	</tr>
	
	<tr>
		
		<td><input type="submit" name="dangky" value="Đăng ký"></td>
		<td><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
	</tr>
</table>

</form>
<div>
<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hovaten'];
		$taikhoan= $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        $rematkhau=  md5($_POST['rematkhau']);
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
		{
			echo "Vui lòng nhập đầy đủ thông tin.";
			
			
		}elseif($matkhau!=$rematkhau){
			echo "mat khau chua trung"; 

		}
		else{
	
			
			$sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."')";
			$query_dangky=mysqli_query($connect,$sql_dangky);
			if($query_dangky){
				echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
				$_SESSION['dangky'] = $taikhoan;
				$_SESSION['email'] = $email;
				$_SESSION['id_khachhang'] = mysqli_insert_id($connect);
				
				}
			}
		}
			


		
	
	
?>
</div>