<?php
require "connect.php";

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$email_address = $_POST['email-address'];
$birth_date = $_POST['birth-date'];
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$gender = $_POST['gender'];
$address = $_POST['address'];



$sql_username = ("SELECT * FROM users where username = '" . $username . "' LIMIT 1;");
$sql_email = "SELECT * FROM users WHERE email_address = '" . $email_address ."' LIMIT 1; ";

$result_username = mysqli_query($con, $sql_username);

$result_email = mysqli_query($con, $sql_email);
 
if(mysqli_num_rows($result_username) == 1 && $password != $confirm_password && mysqli_num_rows($result_email) == 1 ){
    header("Location: ../register.php?email_error=123&&error=401&&username_error=220");
    exit;
}
elseif (mysqli_num_rows($result_username) == 1 && mysqli_num_rows($result_email) == 1){
    header("Location: ../register.php?username_error=220&&email_error=123");
    exit;
}elseif(mysqli_num_rows($result_username) == 1 && $password != $confirm_password){
    header("Location: ../register.php?username_error=220&&error=401");
    exit;
}elseif(mysqli_num_rows($result_email) == 1 && $password != $confirm_password){
    header("Location: ../register.php?email_error=123&&error=401");
    exit;
}elseif($password != $confirm_password){
    header("Location: ../register.php?error=401");
    exit;
}elseif(mysqli_num_rows($result_username) == 1){
    header("Location: ../register.php?username_error=220");
    exit;
}elseif (mysqli_num_rows($result_email) == 1){
   header("Location: ../register.php?email_error=123");
    exit; 
}






$query = "INSERT INTO users(username, first_name, last_name, password, gender, email_address, birth_date, address) VALUES ('$username','$first_name','$last_name', '$password', '$gender', '$email_address', '$birth_date', '$address')";

mysqli_query($con, $query);


header("Location: ../login.php");








?>