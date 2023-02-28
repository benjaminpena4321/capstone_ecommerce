<?php 
    session_start();

    $id = $_GET['product'];
    $quantity = 1;
    require "connect.php";
    
    $sql = "SELECT * FROM products WHERE product_id = '$id' ";
     
    $result = mysqli_query($con,$sql);
    
    foreach($result as $product){
        extract($product);
        if(isset($_SESSION['cart'])){
            $temp_cart = [
                'product' => $product,
                'name' => $product_name,
                'price' => $product_price,
                'category' => $product_category,
                'description' => $product_description,
                'quantity' => $_SESSION['cart'][$id]['quantity'] + $quantity
            ];

        }else
            $temp_cart = [
                'product' => $product,
                'name' => $product_name,
                'price' => $product_price,
                'category' => $product_category,
                'description' => $product_description,
                'quantity' => $quantity
            ];
        $_SESSION['cart'][$id]=$temp_cart;
    }
        // header('Location: '.$_SERVER['HTTP_REFERER']);

?>