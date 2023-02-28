<?php session_Start(); ?>
<?php include 'partials/header.php' ?>

<body style=" background-color: #c4c4c4;">

 <?php include 'partials/navigation.php' ?> 

 <?php 
		require 'functions/connect.php';
		
		$category = '';
		//the default order by is descending
		$order_by = 'DESC';
		if(isset($_GET['order'])){
			if($_GET['order'] == 'lowest'){
				//this is the order by if the user chooses lowest prices
				$order_by = 'ASC';
				
			}
		}
		//this is the default query if there is no category selected
		$query = "SELECT * FROM products ORDER BY product_price $order_by";
		if(isset($_GET['category']) == true){ 
			$category = $_GET['category'];
			//this is the query if the user selected the category
			$query = "SELECT * FROM products WHERE product_category = '$category' ORDER BY product_price $order_by ";
		}
		$result = mysqli_query($con, $query);
		
	?>
	 <div class="row">
    <div class="col-lg-12">
		<div class=" col-lg-2">
			<?php if(isset($_GET['order']) == true) {?>
						<a href="products.php?order=<?php echo $_GET['order']?>">
							<button class="btn btn-block btn-lg">All</button>
						</a>
			<?php } else { ?>
				 <a href="products.php">
						<button class="btn btn-block btn-lg">All</button>
				</a>
			<?php } ?> 
    	 </div>
      <div style="width" class="col-lg-2">
		<?php 

		if(isset($_GET['order']) == true){ ?>
			<!-- order -->
			<a href="products.php?category=sports&order=<?php echo $_GET['order']?>">
				<button class="btn btn-block btn-lg">Sports <i class="fas fa-football-ball"></i></button>
			</a> 
		 <?php }else{ ?>
			<!-- without order -->
			<a href="products.php?category=sports">
				<button class="btn btn-block btn-lg">Sports <i class="fas fa-football-ball"></i></button> 
			</a>
		 <?php }?>

      </div>
      <div class="col-lg-2">
		<?php if(isset($_GET['order']) == true) {?>
        <a href="products.php?category=casual&order=<?php echo $_GET['order']?>">
	       	<button class="btn btn-block btn-lg">
	       		Casual <i class="fas fa-glasses"></i>
	       	</button> 
        </a>
		<?php }else { ?>
		<a href="products.php?category=casual">
			<button class="btn btn-block btn-lg">
				Casual  <i class="fas fa-glasses"></i>
			</button> 
		</a>
		<?php } ?>
      </div>
      <div class="col-lg-2">
		<?php if(isset($_GET['order']) == true) {?>
			<a href="products.php?category=analog&order=<?php echo $_GET['order']?>">
				<button class="btn btn-block btn-lg"> 
					Analog
					<i style="font-size: 10px" class="far fa-clock"></i>
				</button>
			</a>

			<?php }else { ?>
			<a href="products.php?category=analog">
				<button class="btn btn-block btn-lg"> 
					Analog
					<i style="font-size: 10px" class="far fa-clock"></i>
				</button>
			</a>
	

		<?php } ?>
       
      </div>
      <div class="col-lg-2">
		<?php if(isset($_GET['order']) == true) {?>
			<a href="products.php?category=digital&order=<?php echo $_GET['order']?>">
				<button class="btn btn-block btn-lg"> 
					Digital <i class="fas fa-digital-tachograph"></i>
				</button> 
			</a>

			<?php }else { ?>
			<button class="btn btn-block btn-lg">
				<a href="products.php?category=digital">Digital</a> <i class="fas fa-digital-tachograph"></i>
			</button> 
		<?php } ?>
       
      </div>
	  
    </div>
  </div> <br>
 
	<div class="row container">
		<div class="col-lg-6">
			<?php if(isset($_GET['category']) == false){ ?>
				<h3><button><a href="products.php?order=highest">Highest Price</a></button></h3> 
			<?php } elseif (isset($_GET['category'])){ ?>
				<h3><button><a href="products.php?category=<?php echo $category ?>&order=highest">Highest Price</a></button></h3>
			<?php } ?>

				
		</div>
		<div style="width" class=" col-lg-6">
			<?php if(isset($_GET['category']) == false ) { ?>
				<h3> <button> <a href="products.php?order=lowest">Lowest Price</a> </button></h3>

			<?php }else{ ?>
				<h3> <button> <a href="products.php?category=<?php echo $category?>&order=lowest">Lowest Price</a> </button></h3>
			<?php } ?>
			 
        </div>
	</div><br>



	<div class="container-fluid row wire">
	<?php while ($row = mysqli_fetch_assoc($result)) { ?>
		<div class="sample_watch col-lg-4 wire">
		<table class="pure-table">
			<img src="<?php echo $row['product']; ?>" width="320px"style="height:350px;">
		
				<li><a href="product_details.php?product_id=<?php echo $row['product_id'] ?>"><?php echo $row['product_name'];
				?></a></li>
				<li>₱ <?php echo $row['product_price']; ?></li>
				<li><em> <strong>Category: <?php echo $row['product_category']; ?> </strong></em></li>
		</table>
			<form action="functions/add_to_cart_endpoint.php" method="get">
				<center>
					<button data-toggle="modal" data-target="#modal-<?php echo $row['product_id']; ?>" data-id="<?php echo $row['product_id']; ?>" class="btn btn-success add-cart" type="button">Add to cart</button>

				</center>

				<!-- Modal -->
				<div class="modal fade" id="modal-<?php echo $row['product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Item added to cart</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <?php echo $row['product_name'];?> Has been added to your cart
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-success" data-dismiss="modal">Got it!</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Modal -->
			</form>
		</div>
	<?php } ?>
	</div>

	<?php include 'partials/footer.php' ?>

</body>
</html>

<script type="text/javascript">
	$('.add-cart').click( function() {
		let prodId = $(this).attr('data-id');

		$.ajax({
			url:'functions/add_to_cart_endpoint.php',
			method: 'GET',
			data:{product:prodId}
		}).done( function(data){
		
		});
	});
</script>