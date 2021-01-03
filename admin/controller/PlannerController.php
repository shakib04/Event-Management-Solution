<?php

require_once "../model/database-conn.php";

function approvePlanner()
{
}

function allPlanner()
{
    $allPlannerQuery = "SELECT * FROM `all_registered_users` WHERE type = 'planner';";
    $data = getColumsValue($allPlannerQuery);
    return $data;
}

function plannerServices($username)
{
    $sqlServiceList = "SELECT * FROM planner_services_list psl, event_categories ec WHERE psl.e_category = ec.id and username = '" . $username . "'";
    //SELECT * FROM planner_services_list psl, event_categories ec WHERE psl.e_category = ec.id and username = 'joy004';
    $data = getColumsValue($sqlServiceList);
    return $data;
}

//get all unapproved planner
function getAllUnApprovedPlanner()
{
    $sql = "SELECT * FROM `all_registered_users` WHERE type = 'planner' and approved = 'no' ORDER BY `registration_date` DESC;";
    $newUnapprovedPlanner = getColumsValue($sql);
    return $newUnapprovedPlanner;
}


//get total earning

function getTotalEarning($username)
{
    echo $sql = "SELECT SUM(service_price) totalEarning FROM `purchased_services_details` WHERE planner_username = '" . $username . "';";
    $data = getColumsValue($sql);
    return $data;
}


function deletePlanner($username)
{
    $sql = "DELETE FROM `all_registered_users` WHERE `all_registered_users`.`username` ='$username'";
    $result = execute($sql);
    return $result;
}

