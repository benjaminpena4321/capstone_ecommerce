<?php session_start(); ?>
<?php include 'partials/header.php' ?>

<body style=" background-color: #c4c4c4;">

 <?php include 'partials/navigation.php' ?> 



	
<style type="text/css">
	.admin-design{
		margin-top:250px;
		background-color: rgba(0,0,0,0.5);
		padding:50px;
	}
		
</style>
    


<body class="login-background">
	<div class="row">
		<div class="col-lg-4"></div>

		<div class="col-lg-4 admin-design">
				<?php 
				if(isset($_GET["error"]) == true){
					if($_GET["error"] == 403){
						echo "<label style='color:red;'>Invalid username or password</label>";
					}
				}
				if(isset($_GET['must']) == true){
					if($_GET['must'] == 'logged'){
						echo "<label style='color:red;'> Must login first</label>";
					}
				}
				?>
			<form method="post" action="functions/login_function.php">
				<center><h3 style="color:white;">LOGIN</h3></center>
				<input class="form-control" type="text" name="username" placeholder="Username"><br>
				<input class="form-control" type="password" name="password" placeholder="Password"><br>
				<button class="btn btn-success btn-block btn-lg">Login</button>
			</form>
				
		</div>
		<div class="col-lg-4"></div>
	</div>
</body>
 









































	

















  

</body>
</html>