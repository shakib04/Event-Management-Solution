<?php

require_once '../models/db_connection.php';


function getUserDetails($username)
{
    $sqlUserDetails = "SELECT * FROM `all_registered_users` WHERE username = '" . $username . "';";
    $allData = getColumsValue($sqlUserDetails);
    return $allData;
}
function searchPlanner($service_name)
{
    
    $sql = "SELECT * FROM `planner_services_list` WHERE `service_name` like '%$service_name%'";
    $data = getColumsValue($sql);
    return $data;
}
function getAllServices()
{

}

function suggestedServices()
{
    $sql = "SELECT * FROM `planner_services_list` WHERE 1;";
    $data = getColumsValue($sql);
    return $data;
}
//
?>
