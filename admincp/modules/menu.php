<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quản lý</title>
   <link rel="stylesheet" href="css/style_menu.css">
</head>
<body>
   
<ul class="admincp_list" >
   <div class="menu_admin" >
    <?php
        if(isset($_SESSION['dangnhap'])){
            if($_SESSION['dangnhap']=='admin'){
    ?>
          <a style="text-decoration: none;" href="index.php?action=quanlydoanhthu&query=them"> <li class="item-menu" >Quản lý doanh thu</li> </a>
       <a style="text-decoration: none;" href="index.php?action=quanlysanpham&query=them"> <li class="item-menu" >Quản lý sản phẩm</li> </a>
       <a style="text-decoration: none;" href="index.php?action=quanlydanhmucsanpham&query=them"> <li class="item-menu"  >Quản lý danh mục sản phẩm </li></a>
       <a style="text-decoration: none;" href="index.php?action=quanlynguoidung&query=them"><li  class="item-menu" >Quản lý người dùng</li></a>
       <a style="text-decoration: none;" href="index.php?action=quanlydonhang&query=them"> <li class="item-menu"  >Quản lý đơn hàng </li></a>
    
    <?php

            }
       }
    
    ?>
    </div>
</ul>
</body>
</html>