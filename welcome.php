<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
    body {
        background-color: #5f396a;
    }
    </style>
    <title>Admin | Login</title>
</head>
<?php
$uname = "admin";
$pwd = "admin";
session_start();

if (isset($_SESSION['uname'])) {
    header("location:admindashboard.php");
    session_destroy();
} else {
    if ($_POST['uname'] == $uname && $_POST['pwd'] == $pwd) {
        $_SESSION['uname'] = $uname;
        header("location:admindashboard.php");
    } else {
        echo '<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
</script>
<script>
window.onload = function swal() {
    Swal.fire({
  icon: \'error\',
  title: \'Oops...\',
  text: \'Incorrect Credentials!\',
})
};
</script>';
        echo '<meta http-equiv="refresh" content="1; URL=\'adminlogin.html\'" />';
    }
}