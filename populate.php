<?php
	include("connection.php");
	$gttlsum = 0;
	$cart_from_cookie = $_COOKIE['cart'];
	$cart = json_decode($cart_from_cookie, TRUE);
	$cart_id_arr = array_keys($cart);
	$cart_str = implode(',', $cart_id_arr);
	//$conn = mysqli_connect('localhost', 'root', '23222322', 'hungyrie');
  	$prod_select_query = "SELECT id, name, price FROM products WHERE id IN ($cart_str)";
  	$result = mysqli_query($conn, $prod_select_query);
  	while($rowData = mysqli_fetch_array($result)){
  		$qty = $cart[$rowData['id']]['qty'];
?>
	<tr>
		<td><?php echo $rowData['name']; ?></td>
		<td><?php echo $qty; ?></td>
		<td><?php echo $qty*$rowData['price']; ?></td>
	</tr>
	<div style="display: none;"><?php $gttlsum += $qty*$rowData['price']; echo $gttlsum;?></div>

<?php
	}
?>