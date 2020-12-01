<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: ../homepage.php");
}

if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] != "admin") {
        header("location: ../homepage.php");
    }
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: ../homepage.php");
}
