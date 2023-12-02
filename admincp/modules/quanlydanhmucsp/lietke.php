
<?php
    $sql_lietke="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
    $result_lietke= mysqli_query($connect,$sql_lietke);
?>
<p style="font-size:30px;"><b>Liệt kê danh mục sản phẩm</b></p>
<hr style="margin-top:-20px;">

 <table style="width: 100%; border: 1;" style="border-collapse:collapse;"> 
     <tr>
         <td>ID</td>
         <td>Tên danh mục</td>
         <td>Thứ tự</td>
         <td>Quản lý</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke)){
        $i++;
    
     ?>
     <tr style="border-top:2px orange solid">
         <td><?php echo $i ?></td>
         <td><?php echo $row['tendanhmuc'] ?></td>
         <td><?php echo $row['thutu']?></td>
         <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a>|
             <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>