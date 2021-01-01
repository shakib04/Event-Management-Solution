<?php

require_once "../model/database-conn.php";


function allServicesList()
{
    $sqlServiceList = "SELECT * FROM planner_services_list psl, event_categories ec WHERE psl.e_category = ec.id;";
    $data = getColumsValue($sqlServiceList);
    return $data;
}