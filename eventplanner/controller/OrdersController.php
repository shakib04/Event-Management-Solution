<?php
require_once "../model/database-conn.php";

function getRequestedUnpaOrder()
{
    $sql = "select * from `purchased_services_details` psd, `planner_services_list` psl where psd.service_id = psl.service_id and planner_username = '" . $_SESSION['username'] . "' and `planner_approve` = 'no';";
    $data = getColumsValue($sql);
    return $data;
}