<?php
session_start();

if ( !isset($_SESSION['username']) ) {
    header("location: login.php");
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
}
?>
