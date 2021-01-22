<?php
require_once "../model/database-conn.php";

function getRequestedUnpaOrder()
{
    $sql = "select * from `purchased_services_details` psd, `planner_services_list` psl where psd.service_id = psl.service_id and planner_username = '" . $_SESSION['username'] . "' and `planner_approve` = 'no';";
    $data = getColumsValue($sql);
    return $data;
}

function findOrderDetailsByID($id)
{
    return true;
}


if (isset($_GET['approve_order']) and isset($_GET['purchased_id'])) {
    if ($_GET['approve_order'] == "yes") {
        if (findOrderDetailsByID($_GET['purchased_id'])) {
            if (approveOrder()) {
                header("location:".$_SERVER['PHP_SELF']."");
            }
        } else {
            echo "<h1>Purchased Id Not Found</h1>";
        }
    }
}

function approveOrder()
{
    $sql = "UPDATE `purchased_services_details` SET `planner_approve` = 'yes' WHERE `purchased_services_details`.`purchased_id` = " . $_GET['purchased_id'] . ";";
    $result = execute($sql);
    return $result;
}


function getApprovedOrderList()
{
    $sql = "select * from `purchased_services_details` psd, `planner_services_list` psl where psd.service_id = psl.service_id and planner_username = '" . $_SESSION['username'] . "' and `planner_approve` = 'yes';";
    $result = getColumsValue($sql);
    return $result;
}