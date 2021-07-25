<?php
session_start();

if (isset($_SESSION['login_user'])) {
    session_destroy();
    echo '<meta http-equiv="refresh" content="1; URL=\'adminlogin.php\'" />';
} else {
    echo '<meta http-equiv="refresh" content="1; URL=\'adminlogin.php\'" />';
}