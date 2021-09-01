<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}



echo $_SESSION["username"];

if($_SESSION["username"] == "admin"){

    header("Location: admin_dashboard.php");

}else{
    header("Location: fac_dashboard.php");
}




?>

<a href="logout.php"> logout</a>

<br>
<a href="reset-password.php">Reset password?</a>
