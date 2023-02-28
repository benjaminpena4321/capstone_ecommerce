<?php session_start(); 
    require "connect.php";
    



    $cart = $_SESSION['cart'];
    if( isset($_SESSION['user']) == 0){
        header('Location: ../login.php?must=logged');
        exit;
    }


    $user_id = $_SESSION['session_id'];

    $transaction = uniqid();
    $code = strtoupper($transaction);

    $sql = "INSERT INTO orders (transaction_code,user_id) VALUES ('$transaction', '$user_id')";

    $result = mysqli_query($con,$sql);

    unset($_SESSION['cart']);
    
    header('Location: ../cart.php');
    exit;







?>