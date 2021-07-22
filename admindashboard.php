<?php
session_start();

if (isset($_SESSION['uname'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Images/Logo.png">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>FMS | Admin</title>
    <style>
    </style>
</head>
<frameset cols="15%,80%">
    <frame name="left" src="sidebar.html" />
    <frame name="main" src="rightmainbar.html" />
    <noframes>

        <body>The browser you are working does not
            support frames.</body>
    </noframes>
</frameset>

</html>

<?php
} else {
    echo "<script>location.href='adminlogin.html'</script>";
}
?>