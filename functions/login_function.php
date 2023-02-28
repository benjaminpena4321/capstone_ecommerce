<?php 
    session_start();
    require "connect.php";

//      $admin_username = $_POST['admin_username'];
//     $admin_password = $_POST['admin_password'];
    // $admin_sql = "SELECT * FROM user_admin where admin_username = '".$admin_username."' AND admin_password = '".$admin_password."' LIMIT 1; ";

//     $result = mysqli_query($con,$admin_sql) or die(mysqli_error($con));
//     $result1 = mysqli_num_rows($result);
 
//     if ($result1 ==1){
//         while ($row = mysqli_fetch_assoc($result)){
//             $admin_user_details = [
//                 'admin_username' => $row['admin_username'],
//                 'admin_password' => $row['admin_password']
//             ];
//             $_SESSION['user_admin'] = $admin_user_details;
//         }
//         mysqli_free_result($result);

//         header("Location: ../index.php");
//         exit;
//     }else{
//         header("Location: ../login.php?admin_error=403");
//         exit;



// $admin_sql = "SELECT * FROM user_admin where admin_username = '".$admin_username."' AND admin_password = '".$admin_password."' LIMIT 1; ";

    
    $username = $_POST["username"];
    $password = $_POST["password"];


    $admin_query = "SELECT admin_id, admin_username, admin_password FROM user_admin WHERE admin_username = '$username' AND admin_password = '$password' LIMIT 1";
    $result_admin = mysqli_query($con, $admin_query) or die(mysqli_error($con));

    foreach ($result_admin as $admin_id_finder) {
        extract($admin_id_finder);
        $_SESSION['admin_session_id'] = $admin_id;
        $admin_user_details = [
            'admin_username' => $admin_id_finder['admin_username']
        ];
        $_SESSION['admin'] = $admin_user_details;
        header('Location: ../admin/product.php');
        exit;
    }




    $query = "SELECT user_id, username, password FROM users WHERE username = '$username' AND password= '$password' LIMIT 1";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    foreach ($result as $id_finder) {
        extract($id_finder);
        $_SESSION['session_id'] = $user_id;
        $user_details = [
            'username'=> $id_finder['username']
        ];
        $_SESSION['user'] = $user_details;
        header("Location: ../index.php");
        exit;
    }


    header("Location: ../login.php?error=403");
    exit;
    







   


 
   
   












































?>