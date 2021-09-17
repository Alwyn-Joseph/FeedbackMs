<?php
include("config.php");
session_start();
if (isset($_SESSION['login_user_employer'])) {
    header("location: employerForm.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $password = md5(mysqli_real_escape_string($con, $_POST['pwd']));


    $sql = "SELECT * FROM users WHERE u_id = '$id' and u_pass = '$password' and u_type='employer'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count >= 1) {
        $_SESSION['login_user_employer'] = $id;
        header("location: employerForm.php");
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
        echo '<meta http-equiv="refresh" content="1.5; URL=\'employerlogin.php\'" />';
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
    <title>Employer | Login</title>
</head>

<body>
    <form action="" method="post">

        <div class="imgBox">
            <img src="images/user.png" alt="Admin" class="adminLogo">
            <h1>Employer Login</h1>
        </div>

        <div class="container">
            <label for="uname"><b>Employer e-mail</b></label>
            <input type="text" name="id" placeholder="Enter Email" required>

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