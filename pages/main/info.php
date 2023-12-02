<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/info.css">
</head>
<body>
<p><?php
            if(isset($_SESSION['dangky'])){
                // echo 'Xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
                $id =$_SESSION['dangky'];
                $sql_thongtin ="SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
                $query_thongtin=mysqli_query($connect,$sql_thongtin);
                
                while($row=mysqli_fetch_array($query_thongtin)){         
    ?>
</p>
    <br>

    <div class="container-info">
        <div class="container-info-left">
            <ul class="card-list">
                <li class="card-item">
                    <div class="card-item-img">
                        <img  src="uploads/<?php echo $row['hinhAnh'] ?>">
                    </div>
                    <p class="card-item-name">
                        <?php 
                            echo ''.'<span style="color:#fff">'.$row['taikhoan'].'</span>';
                        ?>
                    </p>
                    <p class="card-item-duty">
                        <?php 
                            echo ''.'<span >'.$row['hovaten'].'</span>';
                        ?>
                    </p>
                    <div class="social-media-list">
                        <a href="https://www.facebook.com/profile.php?id=100025551459938&mibextid=LQQJ4d" class="social-media-item"><i class="fab fa-facebook facebook-icon"></i></a>
                        <a href="https://www.youtube.com/A" class="social-media-item"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/" class="social-media-item"><i class="fab fa-instagram"></i></a>
                        <a href="https://github.com/slygel" class="social-media-item"><i class="fab fa-github"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="wrapper-info">
            <div class="info-header">
                <h3>Hồ sơ của bạn</h3>
                <p>Quản lý thông tin cá nhân của bạn</p>
            </div>
            <div class="infor-main">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="infor-main-text" style="justify-content: flex-start;">
                    <label for="">Tên Đăng Nhập: </label>
                    <input style="margin-left: 20px;" type="text" name="hovaten" value="<?php echo $row['hovaten'] ?>">
                </div>
                <div class="infor-main-text" style="justify-content: flex-start;">
                    <label for="">Email: </label>
                    <input style="margin-left: 20px;" type="text" name="email" value="<?php echo $row['email'] ?>">
                </div>
                <div class="infor-main-text" style="justify-content: flex-start;">
                    <label for="">Địa Chỉ: </label>
                    <input style="margin-left: 20px;" type="text" name="diachi" value="<?php echo $row['diachi'] ?>">
                </div>
                <div class="infor-main-text" style="justify-content: flex-start;">
                    <label for="">Số Điện Thoại: </label>
                    <input style="margin-left: 20px;" type="text" name="sodienthoai" value="<?php echo '0'.$row['sodienthoai'] ?>">
                </div>
                <div class="infor-main-text" style="justify-content: flex-start;">
                    <label for="">Ảnh: </label>
                    <input style="margin-left: 20px;" type="file" name="hinhAnh">
                </div>
                <div class="infor-main-text" style="margin-left: 150px;">
                    <input style="background-color: greenyellow; color:black; border-radius: 5px; border: none; padding: 2px 6px" style="margin-left: 20px;" type="submit" name="sua" value="Sửa thông tin">
                </div>
            </form>
            
        </div>
    </div>
    <?php
            }
    }

    ?>

    <?php
    
    if (isset($_SESSION['dangky'])) {
        $id = $_SESSION['dangky'];
        $sql_thongtin = "SELECT * FROM tbl_dangky WHERE taikhoan='$id' LIMIT 1";
        $query_thongtin = mysqli_query($connect, $sql_thongtin);

        if (isset($_POST['sua'])) {
            $newHovaten = $_POST['hovaten'];
            $newEmail = $_POST['email'];
            $newDiachi = $_POST['diachi'];
            $newSodienthoai = $_POST['sodienthoai'];
            if(isset($_FILES["hinhAnh"]["name"])){
                $hinhanh=$_FILES["hinhAnh"]["name"];
                $hinhanh_tmp=$_FILES['hinhAnh']['tmp_name'];

                $sql_update = "UPDATE tbl_dangky SET hovaten='$newHovaten', email='$newEmail', diachi='$newDiachi', sodienthoai='$newSodienthoai', hinhAnh='$hinhanh' WHERE taikhoan='$id'";
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                $query_update = mysqli_query($connect, $sql_update);
            }else{
                $sql_update = "UPDATE tbl_dangky SET hovaten='$newHovaten', email='$newEmail', diachi='$newDiachi', sodienthoai='$newSodienthoai' WHERE taikhoan='$id'";
                $query_update = mysqli_query($connect, $sql_update);
            }

            if ($query_update) {
                echo "<p style=\"color:green\">Tải lại trang để xem thông tin đã được cập nhật!</p>";

                $query_thongtin = mysqli_query($connect, $sql_thongtin);
                $row = mysqli_fetch_array($query_thongtin);
            } else {
                echo "Có lỗi xảy ra khi cập nhật thông tin: " . mysqli_error($connect);
            }
        }
    }
    ?>

</body>
</html>