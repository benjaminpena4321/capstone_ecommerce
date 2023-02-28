<?php 

    session_start();

    $id = $_GET['delete'];
    
    unset($_SESSION['cart'][$id]);
    $unset_cart = count($_SESSION['cart']);
    echo count($_SESSION['cart']);
    if($unset_cart == 0){
        unset($_SESSION['cart']);
    }


?>

