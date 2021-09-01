<?php
include("config.php");
if (isset($_SESSION['username'])) {
    header("location: faculties.php");
}
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($con, $_POST['uname']);
    $password = md5(mysqli_real_escape_string($con, $_POST['pwd']));


    $sql = "SELECT u_id FROM users WHERE u_name = '$username' and u_pass = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['login_user'] = $username;
        header("location: faculties.php");
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
        echo '<meta http-equiv="refresh" content="1.5; URL=\'adminlogin.php\'" />';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Admin | Login</title>
</head>

<body>
    <form action="" method="post">

        <div class="imgBox">
            <img src="images/AdminLogo.png" alt="Admin" class="adminLogo">
            <h1>Admin Login</h1>
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" name="uname" placeholder="Enter Username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" name="pwd" placeholder="Enter Password" required>

            <button type="submit" name="submit">Login</button>

        </div>
        <div class="homeImgBox">
            <a href="home.html"><img src="images/goback.png" alt="Home" class="goBack"></a>
        </div>
    </form>
</body>

</html>