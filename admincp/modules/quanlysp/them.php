<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_qlsp_them.css">
</head>
<body>
<!-- <div style="display:flex; width:1000px;"><div style="width:450px; text-align:center;font-size:30px;"><b>^</b></div><div style="width:500px;"></div><div style="width:560px;"></div><div style="width:260px;"></div></div> -->

<p style="font-size:30px;"><b>Thêm sản phẩm</b></p>
<hr style="margin-top:-20px;">

<table border="1" width="50%" style="border-collapse: collapse;">
  <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
   <tr>
       <th colspan="2">Điền sản phẩm</th>
   </tr>
   <tr>
       <td>Tên sản phẩm</td>
       <td><input style="height: 20px; width:200px;" type="text" name="tensanpham" ></td>
   </tr>
   <tr>
       <td>Mã sản phẩm</td>
       <td><input style="height: 20px; width:200px;"  type="text" name="masp" ></td>
   </tr>
   <tr>
       <td>Giá</td>
       <td><input style="height: 20px; width:200px;"  type="number" name="giasp" ></td>
   </tr>
   <tr>
       <td>Số lượng</td>
       <td><input style="height: 20px; width:200px;"  type="text" name="soluong" ></td>
   </tr>
   <tr>
       <td>Hình ảnh</td>
       <td><input type="file" name="hinhanh" ></td>
       
   </tr>
   <tr>
       <td>Tóm tắt</td>
       <td> <textarea name="tomtat"  rows="5" cols="50" style="resize: none;"></textarea> </td>
   </tr>
   <tr>
       <td>Nội dung</td>
       <td> <textarea name="noidung" rows="5"  cols="50" style="resize: none;"></textarea> </td>
   </tr>
   <tr>
       <td>Danh mục sản phẩm</td>
       <td>
         <select  style="height: 30px; width:200px;font-size:20px;"  name="danhmuc">
               <?php
                   $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                   $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
                   while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
               ?>
               <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
               <option  value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
           

               <?php
                   }
               ?>
         </select>
       </td>
   </tr>
   <tr>
       <td>Tình trạng </td>
       <td>
         <select  style="height: 30px; width:200px;font-size:20px;" name="hienthi">
               <option value="1">Mới</option>
               <option value="0">Cũ</option>
         </select>
       </td>
   </tr>
   <tr style="text-align:center">

       <td colspan="2"><input type="submit" value="Thêm sản phẩm" style="height:30px;font-size:20px;" name="themsanpham"></td>
   </tr>
</form>
</table>
</body>
</html>