<?php
$host = "localhost:3307";
$dbuser = "root";
$dbpass = "";
$dbname = "alvas";

$con = mysqli_connect("$host", "$dbuser", "$dbpass", "$dbname");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}