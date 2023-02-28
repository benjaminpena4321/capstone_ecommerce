<?php 
session_start();
    include ("../partials/header.php");
    if(!isset($_SESSION['user_admin'])){
            header("Location: login.php");
            exit;
        }
   


?>

<?php include "partials/navigation.php";?>


<h1>Welcome Admin</h1>
