 <p>Xem đơn hàng</p>
 <?php
    $code=$_GET['code'];
    $sql_lietke_dh="SELECT * FROM tbl_cart_detail ,tbl_sanpham  WHERE tbl_cart_detail.id_sanpham=tbl_sanpham.id_sanpham 
        AND tbl_cart_detail.code_cart=$code
        ORDER BY tbl_cart_detail.id_cart_detail DESC";
    $result_lietke_dh= mysqli_query($connect,$sql_lietke_dh);
?>

<p style="font-size:30px;"><b>Liệt kê danh mục sản phẩm</b></p>
<hr style="margin-top:-20px;">
 <table style="width: 100%;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <td>ID</td>
         <td>Mã đơn hàng</td>
         <td>Tên Sản phẩm</td>
         <td>Hình </td>
         <td>Số lượng</td>
         <td>Đơn giá</td>
         <td>Thành tiền</td>
         
     </tr>
     <?php
    $i=0;
    $tongtien=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
        $thanhtien= $row['giasanpham'] * $row['soluongmua'];
        $tongtien+=$thanhtien;
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td><?php echo $row['code_cart'] ?></td>
         <td><?php echo $row['tensanpham']?></td>
         <td style="width:150px;height:150px;" >
                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>
         <td><?php echo $row['soluongmua']?></td>
         <td><?php echo number_format($row['giasanpham'],0,',','.').'VNĐ' ?></td>
         <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
         
     </tr>
     <?php
    }
    ?>
     <tr>
         <th colspan="7">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VNĐ' ?></th>
         
     </tr>
     <tr>
    
     </tr>
    
 </table>


 