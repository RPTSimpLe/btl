<div style="clear:both;"></div>

<div class="show_new">
    <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
        if(isset($_GET['quanly'])){
            $bientam=$_GET['quanly'];

        }else{
            $bientam="";
        }
        if($bientam==""){?>

        <div class="new_product">
            <h3>SẢN PHẨM MỚI</h3>
        </div>
    <?php
        include("main/sanphammoi.php");
        }
    ?>
 
 </div>
 
 <div style="clear:both;"></div>
 <div class="show">
<?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
    if(isset($_GET['quanly'])){
        $bientam=$_GET['quanly'];

    }else{
        $bientam="";
    }
    if($bientam==""){  
        ?>
            <div class="new_product">
            <h3>TẤT CẢ SẢN PHẨM</h3>
            </div>
        <?php
            include("main/index.php");
            }

        ?>

 </div>