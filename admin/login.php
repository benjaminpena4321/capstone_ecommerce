<!-- <?php 
 
    // include ("../partials/header.php");
  
?>
<style>
    .wire{
        border:1px solid black;
    }
    .admin-background{
        background-image: url("../assets/images/admin_background_image.jpg");
        color:white;
    }

    body {
        background: url(../assets/images/admin_login_background.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
    }
</style>
<body>
    <div class="row">
    <div class="col-lg-3 "> <button class="btn"><a href="../login.php">< Go back</a></button> </div>
    <div class="col-lg-4 "></div>
        <div class="col-lg-4 wire admin-background">
            <center>
                <form action="functions/login_function.php" method="post">
                    
                    <?php 
                        // if(isset($_GET["admin_error"]) == true){
                        //     if($_GET["admin_error"] == 403){
                        //         echo "<span style='color:red;'>Incorrect password or username</span>";
                        //     }
                        }
                        
                    ?>

                    Username:
                    <input class="form-control" type="text" name="admin_username"> <br>
                    Password:
                    <input class="form-control" type="password" name="admin_password"> <br>
                    <button class="btn btn-success">submit</button>
                </form>
            </center>
        </div>
    </div>
    
</body> -->