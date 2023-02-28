<?php session_start(); ?>
<?php include 'partials/header.php' ?>

<body style=" background-color: #c4c4c4;">

 <?php include 'partials/navigation.php' ?> 

	



<body class="registration-background">
    <center>
    <form class="register-form" method="post" action="functions/register_function.php">
        <h2 class="jumbotron">Please complete your details </h2>
		  
          <?php 
            if (isset($_GET["username_error"]) == true) {
                if ($_GET["username_error"] == 220) {
                    echo "<span style='color:red;'>Username already taken </span>";
                }
            }
           ?>
         <input style="width:60%;" class="shadow form-control" type="text" name="username"  placeholder="Username" required> <br> 
         <?php 
			if(isset($_GET['error']) == true){
				if($_GET['error'] == 401){
					echo "<span style='color:red;'>Password does not matched</span>";
				}
			}
		?>
         <input style="width:60%;" class="form-control" type="password" name="password" placeholder="Password" required><br>

        <input style="width:60%;" class="form-control" type="password" name="confirm-password" placeholder="Confirm-password" required> <br> 

            <?php 
                 if (isset($_GET["email_error"]) == true) {
                    if ($_GET["email_error"] == 123) {
                        echo "<span style='color:red;'>Email-address already taken </span>";
                    }
                }
            ?>
		 <input style="width:60%;" class="form-control" type="Emai-address" name="email-address" placeholder="Email-address" required> <br> 
		 <input style="width:60%;" class="form-control" type="date" name="birth-date" placeholder="Email-address" required> 
		 <br>
		 
         <center><input style="width:29%; display:inline;"  class="form-control" type="text" name="first-name" placeholder="First name" required>  &nbsp; &nbsp;
		 <input style="width:242px; display:inline;" class="form-control" type="text" name="last-name" placeholder="Last name" required></center> <br>
		  
          <input style="width:60%;" class="form-control" type="text" name="address" placeholder="Address" required> 
         <br>
         <label>
			 <input type="text" name="gender" placeholder="Gender" required> 
             <input type="checkbox" name=""> Keep me logged in when using this computer <br>
             <input type="checkbox" name=""> Notify me everytime there is new product
         </label> <br>

         <!-- button & background color -->
         <div class="div-register ">    
         <button class="btn btn-warning button-register"><center style="color:black; font-size:15px;">Complete Sign-Up</center>
         </button>
         <p>By registering you confirm that you agree with our <br> <a href="">Terms & condition</a> and <a href="">Provacy Policy</a></p>
         </div>
         <!-- end of button & background color -->
    </form>
    </center>
</body>




	

    






































<?php include 'partials/footer.php' ?>











  

</body>
</html>