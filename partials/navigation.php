
<div class="row">
	<nav class="navbar navbar-expand-lg navbar-inverse  navbar-dark col-lg-12">

		<div class="collapse navbar-collapse">

		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Handy Watch</a>
		    </div>

		    <ul class="nav navbar-nav">
		      <li><a href="index.php">Home</a></li>
		      <li><a href="products.php">Products </a> </li>
		      <li><a href="cart.php"> <span><i class="fas fa-shopping-cart"></i></span> Cart</a></li>
		    </ul>

		    <ul class="nav navbar-nav navbar-right">

		    <?php  
		    	if(!isset($_SESSION['user'])){ ?>
		    		 <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

		    	
		    <?php } ?>
		     		      
					<?php 
						if(isset($_SESSION['user'])){
							?>
									<li><a href="functions/logout_function.php"><span class="glyphicon glyphicon-log-in"></span> Log-out</a></li>
							<?php
						}else {

							?>
								<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							<?php
						} 
					
					
					?>
				
		    </ul>

  		</div>

	</nav>

</div>
