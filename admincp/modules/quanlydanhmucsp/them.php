<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_qlsp_them.css">
</head>
<body>
<!-- <div style="display:flex; width:1000px;"><div style="width:500px;"></div><div style="width:250px; text-align:center;font-size:30px;"><b>^</b></div><div style="width:560px;"></div><div style="width:260px;"></div></div> -->


<p style="font-size:30px;"><b>Thêm danh mục sản phẩm</b></p>
<hr style="margin-top:-20px;">
 <table border="1" width="50%" style="border-collapse: collapse;">
   <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
    <tr>
        <th colspan="2">Điền danh mục sản phẩm</th>
    </tr>
    <tr>
        <td>Tên danh mục</td>
        <td><input  style="height: 30px; width:200px;font-size:20px;"  type="text" name="tendanhmuc" ></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input  style="height: 30px; width:200px;font-size:20px;"  type="text" name="thutu"></td>
    </tr>
    <tr style="text-align:center">

        <td colspan="2"><input type="submit" value="Thêm danh mục sản phẩm" style="height:30px;font-size:20px;" name="themdanhmuc"></td>
    </tr>
</form>
 </table>
</body>
</html>