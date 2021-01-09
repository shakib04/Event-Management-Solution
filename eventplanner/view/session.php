<?php
session_start(); 

if (isset($_SESSION['username']) and isset($_SESSION['type'])) {
    if (strtolower($_SESSION['type']) != 'planner') {
        header("location:../../homepage.php");
        die();
    }
    
}else{
    header("location:../../homepage.php");
    die();

}
