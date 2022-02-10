<?php
	// $prod = [
	// 	'id' => $_POST['prod_id'],
	// ];
	$qty = $_POST['qty'];
	$id = $_POST['prod_id'];
	// echo $id;
	if($_COOKIE['cart']){
		$cart_from_cookie = $_COOKIE['cart'];
		$cart = json_decode($cart_from_cookie, TRUE);
	}

	if(!empty($cart[$id])){
		$qty_old = $cart[$id]['qty'];
	}
	else{
		$qty_old = 0;
	}
	$cart[$id]['id'] = $id;
	$cart[$id]['qty'] = $qty_old + $qty;

	$cart_to_cookie = json_encode($cart);
	// echo $cart_to_cookie;

	setcookie('cart', $cart_to_cookie, time() + (86400 * 30), "/");
	// die;
?>


  