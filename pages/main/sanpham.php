<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> -->

 <?php
    $sql_chitiet ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($connect,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
 ?>
 <div class="warpper_deital"> 
 <div class="hinhanh_sanpham">
        <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
 </div>
    <form class="form-sp" action="pages/main/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST">
        <div class="chitiet_sanpham">
            <h3 style="margin: 0;"><?php echo $row_chitiet['tensanpham'] ?></h3>
            <div class="rating">
               <span class="review-no">4.9</span>
               <div class="stars">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
               </div>
            </div>
            <div class="price">
               <?php $salerandom=rand(10,70) ?>         
               <p class="gia-cu"><?php echo number_format($row_chitiet['giasanpham']*($salerandom/100)+ $row_chitiet['giasanpham'],0,',','.')?> VNĐ</p>
               <h5 class="gia-now"><?php echo number_format($row_chitiet['giasanpham'],0,',','.') ?> VNĐ</h5>
               <span class="slae"><?php echo  $salerandom ?>% GIẢM</span>
            </div>
            <div class="soluong-sp">
               <p class="soluong-sp-p"><b>Số lượng:</b></p>
               <div class="soluong-sp-dem">
                  <a class="soluong-sp-dem-icon" href="pages/main/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                  <input class="soluong-sp-input" type="text" name="soluong" value="1">
                  <a class="soluong-sp-dem-icon" href="pages/main/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
               </div>
               <p class="soluong-sp-cosan">Tồn kho : <?php echo $row_chitiet['soluong'] ?></p><span class="soluong-sp-cosan-text">sản phẩm</span>
            </div>
            <div class="mota">
                  <p class="mota-text"><b>Danh mục:</b> <?php echo $row_chitiet['tendanhmuc']?> </p>
            </div>
            
            <div class="mota">
               <p class="mota-text"><b>Mô tả:</b> <?php echo $row_chitiet['tomtat']?> </p>
            </div>
            <div class="mota">
               <p class="mota-text"><b>Hạn sử dụng :</b> 5 ngày (Tính từ lúc thực khách bóc sản phẩm). </p>
            </div>
            <div class="input-themcart">
               <i class="fa-solid fa-cart-plus"></i>
               <input class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng">
            </div>
        </div>
    </form>
 </div>
 <div style="width: 100%; height: 600px; background-color: rgb(242,242,242)">
     <h2 style="margin-bottom: 20px">Đánh giá</h2>
     <?php
     if (isset($_GET["kh"])){
         echo ' <form action="pages/main/danhGia/themDanhGia.php" method="post" style="width: 500px">
                     <div class="form-group">
                         <label for="exampleInputEmail1">Đánh giá sản phẩm</label>
                         <input type="text" class="form-control" name="danhGia">
                         <input type="text" value="'.$_GET["kh"].'" name="kh" hidden>
                         <input type="text" value="'.$_GET["id"].'" name="sp" hidden>
                         <input type="text" value="'.$_GET["cart"].'" name="cart" hidden>
                     </div>
                     <button type="submit" class="btn btn-primary">Thêm đánh giá</button>
                 </form>';
     }
     ?>

     <?php
     $dg="SELECT tbl_danhgia.*,tbl_dangky.hovaten,tbl_sanpham.tensanpham
        FROM tbl_danhgia
        join tbl_sanpham on tbl_sanpham.id_sanpham = '$_GET[id]'
        join tbl_dangky on tbl_dangky.id_khachhang = tbl_danhgia.id_khachhang
        WHERE tbl_sanpham.id_sanpham= '$_GET[id]'";
     $danhgias=mysqli_query($connect,$dg);
     while ($danhgia=mysqli_fetch_array($danhgias)){
       ?>
        <h5><?php echo $danhgia['hovaten']?></h5>
         <p><?php echo $danhgia['noidung']?></p>
     <?php
     }
     ?>
 </div>
 <?php
    }
 ?>
 <script type="text/javascript">
      var soluong = document.querySelector('.soluong-sp-input');
      var demPlus = document.querySelector('.soluong-sp-dem-icon .fa-plus');
      var demMins = document.querySelector('.soluong-sp-dem-icon .fa-minus');
      var soluongMax = document.querySelector('.soluong-sp-cosan').innerHTML;
      console.log(soluongMax);
      
      demPlus.addEventListener('click',function(){
         // console.log("hi");
         // soluong.value++;
         if(soluong.value>=soluongMax){
            alert("Số lượng sản phẩm còn lại chỉ còn: "+soluongMax);
            soluong.value=soluongMax;
         } else {
            soluong.value++;
         }
      })
      demMins.addEventListener('click', function(){
          if(soluong.value<=1){
            alert('Số lượng sản phẩm phải lớn hơn bằng 1');
            soluong.value=1;
          } else {
            soluong.value--;
          }
      })

 </script>
 <!-- Tesst -->