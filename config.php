<?php
$host = "localhost";
$dbuser = "alwyn";
$dbpass = "password";
$dbname = "alvas";

$con = mysqli_connect("$host", "$dbuser", "$dbpass", "$dbname");
if (!$con) {
    die("Connection failed ha?: " . mysqli_connect_error());
}