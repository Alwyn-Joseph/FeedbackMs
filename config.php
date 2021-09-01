<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "5682";
$dbname = "alvas";

$con = mysqli_connect("$host", "$dbuser", "$dbpass", "$dbname");
if (!$con) {
    die("Connection failed ha?: " . mysqli_connect_error());
}