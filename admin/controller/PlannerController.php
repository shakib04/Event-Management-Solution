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
    $sqlServiceList = "SELECT * FROM planner_services_list psl, event_categories ec WHERE psl.e_category = ec.id and username = '". $username ."'";
    //SELECT * FROM planner_services_list psl, event_categories ec WHERE psl.e_category = ec.id and username = 'joy004';
    $data = getColumsValue($sqlServiceList);
    return $data;
}
