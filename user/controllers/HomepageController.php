<?php

require_once '../models/db_connection.php';

function getSuggestedServices()
{
    $sql = "SELECT * FROM `planner_services_list` WHERE 1;";
    $data = getColumsValue($sql);
    return $data;
}