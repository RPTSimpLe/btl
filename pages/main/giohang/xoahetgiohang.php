<?php
    session_start();
    include "../../../admincp/config/connect.php";
    //XÓA HẾT GIỎ HÀNG
    if(isset($_GET['xoatatca'])&& $_GET['xoatatca']=='xoahet'){
      unset($_SESSION['cart']);
      header('Location:../../../index.php?quanly=giohang');
	  }

?>