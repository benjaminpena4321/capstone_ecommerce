<?php
    require '../../functions/connect.php';
    require '../../functions/functions.php';

    $image = $_FILES['file_upload'];
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_category = $_POST["product_category"];
    $product_description = $_POST["product_description"];
    $product_quantity = $_POST["product_quantity"];
    
    if ($image['size'] != 0) {

        $upload_image = generateimagename(getfileextension($_FILES, 'file_upload'));
        if(move_uploaded_file($_FILES["file_upload"]["tmp_name"],"../../".$upload_image)) {
            $sql = "UPDATE products SET product_name = '{$product_name}', " .
                    "product='{$upload_image}', " .
                    "product_name='{$product_name}', " .
                    "product_price={$product_price}, " .
                    "product_category='{$product_category}', " . 
                    "product_description='{$product_description}', " .
                    "product_quantity={$product_quantity} " .
                    "WHERE product_id={$product_id} ";
            $result = mysqli_query($con, $sql);

            echo mysqli_error($con);

            header ("Location: ../product.php");
            exit;
        }

    } else {

        $sql = "UPDATE products SET product_name = '{$product_name}', " .
                    "product_name='{$product_name}', " .
                    "product_price={$product_price}, " .
                    "product_category='{$product_category}', " . 
                    "product_description='{$product_description}', " .
                    "product_quantity={$product_quantity} " .
                    "WHERE product_id={$product_id} ";
        $result = mysqli_query($con, $sql);

        echo mysqli_error($con);

        header ("Location: ../product.php");
        exit;
    }

    
    

?>
