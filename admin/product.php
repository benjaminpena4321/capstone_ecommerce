<?php 
    include ("../partials/header.php");
    require "../functions/connect.php";
    require "../functions/functions.php";
    include "partials/navigation.php";
    
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $query = "SELECT * FROM products WHERE product_id = {$id} LIMIT 1;";
        $result = mysqli_query($con, $query);      
    }
?>
 <body style=" background-color: #c4c4c4;" class="container-fluid">
<style>
    table tr > th, td {
        border:1px solid black;
    }
</style>


<?php if (!isset($result)) { ?>
<form action="functions/product_function.php" method="post" enctype="multipart/form-data">
<div class="col-lg-4">
Product Image:
<input  type="file" name="file_upload" required> <br>
Product Name
<input class="form-control" type="text" name="product_name"> <br>

Product Price
<input class="form-control" type="number" name="product_price" min="1"> <br>

Product Description
<input class="form-control" type="text" name="product_description"> <br>
Quantity
<input class="form-control" type="number" name="product_quantity"> <br>
Product Categories
<select name="product_category">
    <option value="Analog">Analog</option>
    <option value="Casual">Casual</option>
    <option value="Sports">Sports</option>
    <option value="Digital">Digital</option>
</select><br>
<button class="btn btn-success">Upload</button>
</div>
<?php  } else { ?>


 <!-- EDIT -->
 <form action="functions/product_update_function.php" method="post" enctype="multipart/form-data">
    
    <?php $edit = mysqli_fetch_assoc($result); ?>
    Product Image:
    <input type="hidden" name="product_id" value="<?php echo $edit['product_id']; ?>">
    <input type="file" name="file_upload"> <br>
    Product Name
    <input type="text" name="product_name" value="<?php echo $edit['product_name']; ?>"> <br>

    Product Price
    <input type="number" name="product_price" value="<?php echo $edit['product_price'] ?>" min="1"> <br>
    Product Categories
    <select name="product_category">
        <option value="Analog" <?php echo isselected($edit['product_category'], 'Analog'); ?>>Analog</option>
        <option value="Casual" <?php echo isselected($edit['product_category'], 'Casual'); ?>>Casual</option>
        <option value="Sports" <?php echo isselected($edit['product_category'], 'Sports'); ?>>Sports</option>
        <option value="Digital" <?php echo isselected($edit['product_category'], 'Digital'); ?>>Digital</option>
    </select><br>
    Product Description
    <input type="text" name="product_description" value="<?php echo $edit['product_description']; ?>"> <br>
    Quantity
    <input type="number" name="product_quantity" value="<?php echo $edit['product_quantity']; ?>" min="1"> 
    <br>
    <button class="btn btn-success">Edit</button>
    <?php } ?>

</form>

<!-- END OF EDIT -->

<?php include_once 'list_of_pages.php' ?>


</body>