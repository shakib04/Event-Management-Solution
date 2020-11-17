<?php
session_start();

if ($_SESSION['username'] == null) {
    header("location: login.php");
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
}
?>
