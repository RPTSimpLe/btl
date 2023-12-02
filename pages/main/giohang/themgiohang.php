<?php
    session_start();
    include "../../../admincp/config/connect.php";
    //them so luong

    //tru so luong

	//xóa sản phẩm 
	if(isset($_SESSION['cart'])&& $_GET['xoa']){

		
	}

    
    //them 
    if(isset($_POST['themgiohang'])&&isset($_POST['soluong'])){
		//session_destroy();
		$soluongsp = $_POST['soluong'];
		$soluong = (int)$soluongsp;
		$id=$_GET['idsanpham'];
		// $soluong=1;
		$sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
		$query = mysqli_query($connect,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasanpham'=>$row['giasanpham'],'hinhanh'=>$row['hinhanh'],'masp'=>$row['masanpham']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])&&isset($_POST['soluong'])){
				
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong,'giasanpham'=>$cart_item['giasanpham'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasanpham'=>$cart_item['giasanpham'],'hinhanh'=>$cart_item['hinhanh'],'masp'=>$cart_item['masp']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:../../../index.php?quanly=giohang');
		
	}
?>