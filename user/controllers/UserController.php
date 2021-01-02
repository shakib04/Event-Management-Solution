<?php

require_once '../models/db_connection.php';


function getUserDetails($username)
{
    $sqlUserDetails = "SELECT * FROM `all_registered_users` WHERE username = '" . $username . "';";
    $allData = getColumsValue($sqlUserDetails);
    return $allData;
}
?>