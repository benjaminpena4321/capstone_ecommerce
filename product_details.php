<?php 
    require "functions/connect.php";
    require "partials/header.php";
    if(isset($_GET["product_id"])){
        $product_id = $_GET['product_id'];
       $sql = "SELECT * FROM products WHERE product_id = $product_id LIMIT 1 ; ";
       $result = mysqli_query($con,$sql);
    }


?>

<?php  

    if(isset($result)){
        while($row = mysqli_fetch_assoc($result)){
            ?>
<body>
    

        <div class="position_style row wire">    
            <div  class="col-lg-4 ">
                <img src="<?php echo $row['product']; ?>" width="320px">
            </div>
            <div class="col-lg-6">
                <li><?php echo $row['product_name']; ?></li>
                        <li>₱ <?php echo $row['product_price']; ?></li>
                        <li><em><strong> Category: <?php echo $row['product_category']; ?></strong></em></li>
                        
                    <li><em>Description:</em> <?php echo $row['product_description']; ?></li>
                    <form action="functions/add_to_cart_endpoint.php" method="get">
                        
                            <input type="text" name="product" value="<?php echo $row['product_id']?>" hidden>
                            <input style="width:100px;" class="form-control" type="number" name="quantity" value="1" min="1" required> 
                            <button class="btn btn-success">Add to cart</button>
                    
                    </form>
            </div>
        </div>		
		
</body>    
            <?php
        }
    }

?>




<style>
    li {
        list-style-type: none;
    }

    .wire{
        border:1px solid black;
    }

    .position_style {
        margin-top:120px;
    }

    img {
        height:350px;
    }
   

</style>