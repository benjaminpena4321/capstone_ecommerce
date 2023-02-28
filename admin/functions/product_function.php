<?php  

require "../../functions/connect.php";
require "../../functions/functions.php";

$upload_image = generateimagename(getfileextension($_FILES, 'file_upload'));

$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_category = $_POST["product_category"];
$product_description = $_POST["product_description"];
$product_quantity = $_POST["product_quantity"];

if(move_uploaded_file($_FILES["file_upload"]["tmp_name"],"../../".$upload_image)) {
    $query = "INSERT INTO products (product, product_name, product_category, product_price, product_description, product_quantity )
            VALUES ('".$upload_image."','".$product_name."', '{$product_category}', $product_price, '".$product_description."', $product_quantity);";
    
    $result = mysqli_query($con,$query);
    
    header ("Location: ../product.php");
    exit;
}



// $result = mysqli_query($con,$query);
// header('Location: ../product.php');
// exit;
























?>