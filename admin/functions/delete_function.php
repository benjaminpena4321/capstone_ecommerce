<?php 
    require_once '../../functions/connect.php';
    $id = $_GET['id'];

    $sql = "SELECT product FROM products WHERE product_id = {$id} LIMIT 1;";
    $result = mysqli_query($con, $sql);
    
    while ($row = mysqli_fetch_assoc($result)) {
        unlink('../../' . $row['product']);
    }


    $sql = "DELETE FROM products WHERE product_id = {$id} LIMIT 1;";
    $result = mysqli_query($con, $sql);

    header("Location: ../product.php");
    exit;
?>