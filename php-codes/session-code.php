<?php
session_start();

if (isset($_SESSION['username']) and isset($_SESSION['type'])) {

    $type = strtolower($_SESSION['type']);
    if (strtolower($_SESSION['type']) == "admin") {
        header("location:admin/views/dashboard-admin.php");
    } elseif ($type == "client" or $type == "user") {
        header("location:user/");
    } elseif ($type == "vendor") {
        header("location:vendor/");
    } elseif ($type == "planner") {
        header("location:eventplanner/");
    }
}
