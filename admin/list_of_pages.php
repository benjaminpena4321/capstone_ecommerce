<?php
    $sql = "SELECT * FROM products;";
    $result = mysqli_query($con, $sql);
?>
<table border="1">
    <tr>
        <th>&nbsp;</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Category</th>
        <th>Product Desription</th>
        <th>Product Quantity</th>
        <th>Action</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><img src="<?php echo '../' . $row['product'] ?>" width="320px"></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['product_price']; ?></td>
        <td><?php echo $row['product_category'];?></td>
        <td><?php echo $row['product_description']; ?></td>
        <td><?php echo $row['product_quantity'];?></td>
        <td><a href="product.php?edit=<?php echo $row['product_id']; ?>">Edit</a><br><a href="functions/delete_function.php?id=<?php echo $row['product_id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>
