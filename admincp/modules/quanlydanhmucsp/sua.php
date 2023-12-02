<?php
    $sql_sua="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
    $result_sua= mysqli_query($connect,$sql_sua);
?>
<p>Sửa danh mục sản phẩm</p>
 <table border="1" width="50%" style="border-collapse: collapse;">
   <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
    <?php
        while($dong =mysqli_fetch_array($result_sua)){
    ?>
   <tr>
        <th colspan="2">Điền danh mục sản phẩm</th>
    </tr>
    <tr>
        <td>Tên danh mục</td>
        <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>" ></td>
    </tr>
    <tr>
        <td>Thứ tự</td>
        <td><input type="text" name="thutu" value="<?php echo $dong['thutu']?>"></td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suadanhmuc"></td>
    </tr>
    <?php
        }
    ?>
</form>
 </table>