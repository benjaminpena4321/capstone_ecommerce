<?php session_start(); ?>
<?php include 'partials/header.php' ?>

<body style=" background-color: #c4c4c4;">

 <?php include 'partials/navigation.php' ?> 

 <div class="container">
	<div >
		<h2>Shopping cart</h2>
		
	</div>
	<div class="cart-body">
	<div class="col-lg-6" >
	<table>	
			<?php 
				$product_total = 0;
				if(isset($_SESSION['cart'])) {
					?>
					<thead>
						<tr>
							<th>Product</th>
							<th>Product Name</th>
							<th>Total Price</th>
							<th>Category</th>
							<th>Quantity</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
					foreach($_SESSION['cart'] as $id => $item){ 
					
						
						$product_total += $item['price'] * $item['quantity'];

						?>
						<tbody>
							<tr>
								<td><img width="200px" class="cart-sample-watch" src="<?php echo $item['product']; ?>" alt=""></td>
								<td><?php echo $item['name'];?></td>
								<td class="price"><?php echo $item['price'] * $item['quantity'];?></td>
								<td><?php echo $item['category'];?></td>
								<td>
									<form action="functions/update_endpoint.php" method="get">
										<input data-id="<?php echo $id; ?>" data-price="<?php echo $item['price'] ?>" class="update_quantity" name="quantity" type="number" value="<?php echo $item['quantity']; ?>">

									</form>
								</td>
								<td>

									<button class="delete btn btn-danger" data-id="<?php echo $id ?>">Delete
									</button>
								

								</td>

							</tr>
						</tbody>
					<?php }
				}else {
					echo '<h3>Your cart is currently empty</h3>';
				}
			
			?>
			
		
	</table>	
		
	</div>

	<div class="col-lg-6">
		<?php if (isset($_SESSION['cart'])) {?>
			<p>
				<strong>Total:</strong>

				<span id="total_price"><?php echo $product_total;?></span>
					
			</p>
		<?php }?>
			
			<form action="functions/checkout_endpoint.php" method="post">
				<?php 
					if(isset($_SESSION['cart'])){
						echo	'<button class="btn btn-success">Check-out</button>';

					}
				
				?>
			</form>	
	</div>

</div>

</div>


 <style>
	footer{
		position:fixed;
	}
 </style>

</body>
</html>

<script>

  	$('.update_quantity').change(function() {
		let id = $(this).attr('data-id');
		let price = $(this).attr('data-price');
		let quantity = $(this).val();
		let totalPrice = $(this).parent().parent().parent().children('.price');

		totalPrice.html(eval(price+'*'+quantity));

		$.ajax({
			url: 'functions/update_endpoint.php',
			method: 'GET',
			data:{update_id:id, quantity:quantity}
		}).done( function(data){
			$('#total_price').html(data);

		});


 	});


  	$('.delete').click( function() {
  		let id = $(this).attr('data-id');
  		let body = $(this).parent().parent().parent();
  		let totalPrice = $(this).parent().parent().children('.price');

  		$.ajax({
  			url: 'functions/delete_endpoint.php',
  			method: 'GET',
  			data:{delete:id}
  		}).done( function(data){

  			$('#total_price').html(eval($('#total_price').html()+'-'+totalPrice.html()));
  			body.remove();
  			if (data == 0){
  				$('.cart-body').html('<h3>Your cart is currently empty</h3>');
  			}
  		});

  	});

</script>