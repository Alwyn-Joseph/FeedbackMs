<?php
session_start();

if (isset($_SESSION['uname'])) {
    session_destroy();
    echo '<meta http-equiv="refresh" content="1; URL=\'adminlogin.html\'" />';
} else {
    echo '<meta http-equiv="refresh" content="1; URL=\'adminlogin.html\'" />';
}