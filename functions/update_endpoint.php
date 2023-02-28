<?php 
    session_start();
    
    $update_id = $_GET['update_id'];
    $update_quantity = $_GET['quantity'];
    $product_total = 0;

    $_SESSION['cart'][$update_id]['quantity'] = $update_quantity;
    // header('Location:'.$_SERVER['HTTP_REFERER']);

    foreach($_SESSION['cart'] as $id => $item){ 
		$product_total += $item['price'] * $item['quantity'];
	}
	
	echo $product_total;

  
?>