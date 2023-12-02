<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admincp.css">
    <link rel="stylesheet" href="css/style_index.css">
    <title>AdminCp</title>
</head>
<body style="background-color:#fff;">
<div class="header-admin">
    <h3 class="admincp_tile">ADMIN CÔNG TY TAKLD</h3>
</div>
    <div class="wrapper" style="border: none;">
    <?php
        include("config/connect.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
        ?>
    </div>
</body>
</html>