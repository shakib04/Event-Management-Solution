<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: ../../homepage.php");
    die();
}

if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] != "user") {
        header("location: ../../homepage.php");
        die();
    }
}

if (!isset($_COOKIE['username'])) {
    session_unset();
    session_destroy();
    header("location: ../../homepage.php");
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: ../../homepage.php");
}
