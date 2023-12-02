<?php
        session_start();
        include "../../../admincp/config/connect.php";

        if(isset($_SESSION['dangky'])){
            echo 'HELLO: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
        
        
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="mainstyle.css">
    <title>Document</title>
</head>
<body>
    <style>
     a:hover{
         text-decoration: none;
     }
     li{
         list-style: none;
     }
    </style>
    <section class="cart">
        <div class="container">
            <div class="cart-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                       <a href="../../../index.php?quanly=giohang" > <i class="fas fa-shopping-cart cart-top-item"></i></a>
                    </div>
                    <div class="cart-top-adress cart-top-item">
                        <a href="index.php?quanly=vanchuyen" ><i class="fas fa-map-marker cart-top-item gray"></i></a>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                        <a href="index.php?quanly=thongtinthanhtoan" ><i class="fas fa-money-check-alt cart-top-item gray"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("mainthanhtoan.php");

        ?>
    </section>
</body>
<script type="text/javascript" src="../../../js/modal.js"></script>
</html>
<?php

    }
?>