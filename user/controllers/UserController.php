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
//$sql5="INSERT INTO `purchased_services_details` (`purchased_id`, `client_username`, `planner_username`, `service_id`, `status(paid/unpaid)`, `service_price`, `planner_approve`, `service_rating`, `planner_comment`) VALUES (NULL,'".$_SESSION['username']."','".$_GET['username']."' , '".$GET['service_id']."', 'paid', '4000', 'yes', '0', 'bad')";
?>
