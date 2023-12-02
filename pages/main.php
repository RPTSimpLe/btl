


<div class="main">
            <?php
                #include ("sidebar/sidebar.php");
            ?>
            <div class="maincontent">
              
                <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bientam=$_GET['quanly'];

                        }else{
                            $bientam="";
                        }
                        if ($bientam=='danhmuclist'){
                            include("main/danhmuc.php");
                        }elseif ($bientam=='giohang'){ 
                            include("main/giohang/cart.php");
                        }elseif ($bientam=='dangky'){ 
                            // include("main/dangky.php");
                            header("Location:signin/signin.php");                          
                        }elseif ($bientam=='contact'){ 
                            include("main/contact.php");
                        }elseif ($bientam=='sanpham'){ 
                            include("main/sanpham.php");                    
                        }elseif ($bientam=='dangnhap'){
                            // include("user/loginuser.php");
                            header("Location:user/loginuser.php");                          
                        }elseif ($bientam=='thongtin'){ 
                            include("main/info.php");
                        }elseif ($bientam=='timkiem'){
                            include("main/timkiem.php");
                        }elseif ($bientam=='donhang')  {
                            include("main/donhang/donhang.php");
                        }else{ ?>






                <!-- <div class="silder">
                        <div class="sildes">
                            <input type="radio" name="radio_btn" id="radio1">
                            <input type="radio" name="radio_btn" id="radio2">
                            <input type="radio" name="radio_btn" id="radio3">
                            <div class="silde first">
                                <img src="images/1a.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/2a.jpg" alt="">
                            </div>
                            <div class="silde">
                                <img src="images/4a.jpg" alt="">
                            </div>

                            <div class="navigation-auto">
                                <div class="auto-btn1"></div>
                                <div class="auto-btn2"></div>
                                <div class="auto-btn3"></div>
                                <div class="auto-btn4"></div>

                            </div>

                        
                        </div>
                        <div class="navigation-manual">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                        </div>

                </div> -->
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/img12.webp" style="width:100%">
                        <!-- <div class="text">Caption Text</div> -->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/img11.webp" style="width:100%">
                        <!-- <div class="text">Caption Two</div> -->
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/img13.webp" style="width:100%">
                        <!-- <div class="text">Caption Three</div> -->
                    </div>
                </div>
<br>

                <div style="text-align:center">
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>

<script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
                }
</script>           
                        <?php
                       
                        }
 ?>
                
            </div>
        </div>



