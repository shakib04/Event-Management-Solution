<?php
require_once "../models/db_connection.php";

function getMyOder()
{
    $sql = "select * from `purchased_services_details` psd, `planner_services_list` psl where psd.service_id = psl.service_id and client_username = '".$_SESSION['username']."';";
    $data = getColumsValue($sql);
    return $data;
}