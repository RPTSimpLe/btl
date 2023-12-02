<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./sign_in.css" />
        <title>Đăng ký</title>
    </head>
    <body>
        <div class="main">
            <form action="" method="POST" class="form" id="form-1">
                <h3 class="heading">ĐĂNG KÝ</h3>
                <p class="desc">Cùng nhau mua bánh tại Fresh Garden nhé ❤️</p>

                <div class="spacer"></div>

                <div class="form-group">
                    <label for="fullname" class="form-label">Tên đầy đủ</label>
                    <input id="fullname" name="hovaten" type="text" placeholder="VD: Chú Bé Đần" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Tên tài khoản</label>
                    <input id="fullname" name="taikhoan" type="text" placeholder="VD: Slygel" class="form-control" />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="text"
                        placeholder="VD: chubedan@gmail.com"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input
                        id="password"
                        name="matkhau"
                        type="password"
                        placeholder="Nhập mật khẩu"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                    <input
                        id="password_confirmation"
                        name="rematkhau"
                        placeholder="Nhập lại mật khẩu"
                        type="password"
                        class="form-control"
                    />
                    <span class="form-message"></span>
                </div>                      
                <div class="form-group">
                    <label for="fullname" class="form-label">Số điện thoại</label>
                    <input id="fullname" name="dienthoai" type="text" placeholder="Số điện thoại" class="form-control" />
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="fullname" class="form-label">Địa chỉ</label>
                    <input id="fullname" name="diachi" type="text" placeholder="Địa chỉ" class="form-control" />
                <span class="form-message"></span>
                <input class="form-submit" type="submit" name="dangky" value="Đăng ký">
            <div class="capybara"><a href="../index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a> </div> 
            </form>
            <div>
                <?php
                    session_start();
                    include('../admincp/config/connect.php');   
                    if(isset($_POST['dangky'])) {
                        $tenkhachhang = $_POST['hovaten'];
                        $taikhoan= $_POST['taikhoan'];
                        $matkhau = md5($_POST['matkhau']);
                        $rematkhau=  md5($_POST['rematkhau']);
                        $email = $_POST['email'];
                        $dienthoai = $_POST['dienthoai'];
                        $diachi = $_POST['diachi'];
                        if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai || !$diachi)
                        {
                            echo "Vui lòng nhập đầy đủ thông tin.";
                            
                            
                        }elseif($matkhau!=$rematkhau){
                            echo "mat khau chua Đúng"; 

                        }
                        else{
                    
                            
                            $sql_dangky = "INSERT INTO tbl_dangky(hovaten,taikhoan,matkhau,sodienthoai,email,diachi,chucvu) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."','".$email."','".$diachi."',0)";
                            $query_dangky=mysqli_query($connect,$sql_dangky);
                            if($query_dangky){
                                echo '<script>alert("Đăng ký thành công")</script>';
                                $_SESSION['dangky'] = $taikhoan;
                                $_SESSION['email'] = $email;
                                $_SESSION['id_khachhang'] = mysqli_insert_id($connect);
                                
                                }
                            }
                    }
                
                ?>
            </div>
        </div>
    </body>
</html>
