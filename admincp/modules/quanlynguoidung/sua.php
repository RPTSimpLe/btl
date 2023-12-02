<?php
	$sql_nguoidung="SELECT * FROM tbl_dangky WHERE id_khachhang='$_GET[idnguoidung]' LIMIT 1";
	$querynd=mysqli_query($connect,$sql_nguoidung);
	
?>
<h3>SỬA NGƯỜI DÙNG</h3>

<form action="modules/quanlynguoidung/xuly.php?idnguoidung=<?php echo $_GET['idnguoidung'] ?>" method="POST" enctype="multipart/form-data">
<table   width="50%" style="border-collapse: collapse;">
	<?php
	
	 	while($nguoidung =mysqli_fetch_array($querynd)){
	
	?>

	<tr>
		<td>Name</td>
		<td><input type="text" size="50" name="hovatens"	value="<?php echo $nguoidung['hovaten']?>"></td>
	</tr>
    <tr>
		<td>Account</td>
		<td><input type="text" size="50" name="taikhoans" value="<?php echo $nguoidung['taikhoan']?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size="50" name="emails" value="<?php echo $nguoidung['email']?>">		</td>
	</tr>
	<tr>
		<td>Number Phone</td>
		<td><input type="text" size="50" name="dienthoais" value="<?php echo $nguoidung['sodienthoai']?>">	</td>
	</tr>
	<tr>
		<td>Address</td>
		<td><textarea name="diachis"  cols="47" rows="10" style="resize: none;">
					<?php echo $nguoidung['diachi']?>
			</textarea></td>
	</tr>
	
	<tr>
		
		<td colspan="2" style="text-align: center;"><input type="submit" name="suanguoidung" value="Sửa"></td>
		
	</tr>
	<tr>
		<td>Chức Vụ </td>
			<td>
			<select name="chucvus">
				<?php 
						if($nguoidung['chucvu']==1){
				?>
					<option value="1" selected> Bán hàng</option>
					<option value="0">Không</option>

				<?php
						}else{
				?>
					<option value="1" > Bán hàng</option>
					<option value="0" selected>Không</option>
				<?php

						}
				
				?>
			</select>
			</td>
	</tr>
</table>

</form>
<?php
	 }
	
	?>