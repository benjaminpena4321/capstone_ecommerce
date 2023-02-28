<?php
    session_start();
    require "../../functions/connect.php";
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];
    $admin_sql = "SELECT * FROM user_admin where admin_username = '".$admin_username."' AND admin_password = '".$admin_password."' LIMIT 1; ";

    $result = mysqli_query($con,$admin_sql) or die(mysqli_error($con));
    $result1 = mysqli_num_rows($result);
 
    if ($result1 ==1){
        while ($row = mysqli_fetch_assoc($result)){
            $admin_user_details = [
                'admin_username' => $row['admin_username'],
                'admin_password' => $row['admin_password']
            ];
            $_SESSION['user_admin'] = $admin_user_details;
        }
        mysqli_free_result($result);

        header("Location: ../index.php");
        exit;
    }else{
        header("Location: ../login.php?admin_error=403");
        exit;
    }

   



    


?>