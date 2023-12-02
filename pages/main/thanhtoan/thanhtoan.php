
 <?php
	
	session_start();
	include('../../../admincp/config/connect.php');
	if(isset($_POST['redirect'])){
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = rand(0,9999);// random tuwf 0 den 4 so
	$cart_pay=$_POST['payment'];
	$insert_cart = "INSERT INTO tbl_giohang(id_khachhang,code_cart,cart_status,cart_payment) VALUE('".$id_khachhang."','".$code_order."',1,'".$cart_pay."')";
	$cart_query = mysqli_query($connect,$insert_cart);
	if($cart_query){
		//thêm giỏ hàng chi tiết
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham=$value['id'];
			$soluong=$value['soluong'];
			
			$insert_order_details = "INSERT INTO tbl_cart_detail(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($connect,$insert_order_details);
		}
	}
	$_GET['xoatatca']=='xoahet';
	unset($_SESSION['cart']);
	// header('Location:../../../index.php');
	header('Location:bill.php');
	}
?>