<?php
session_start();
if (isset($_SESSION)) {
    session_destroy();
    echo '<meta http-equiv="refresh" content="1; URL=\'Home.php\'" />';
} else {
    echo '<meta http-equiv="refresh" content="1; URL=\'error.html\'" />';
}