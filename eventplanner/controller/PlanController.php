<?php
require_once "../model/database-conn.php";

function getMyPlanList($username)
{
    $sql = "SELECT * FROM `planner_services_list` psl, event_categories ec WHERE psl.e_category = ec.id and username = '$username';";
    $data = getColumsValue($sql);
    return $data;
}

function getCategories()
{
    $sql = "SELECT * FROM `event_categories`";
    $data = getColumsValue($sql);
    return $data;
}

if (isset($_POST['save_plan'])) {
    $username = $_SESSION['username'];
    $catId = $_POST['cat_id'];
    $price = $_POST['price'];
    $serviceName = $_POST['service_name'];
    $sql = "INSERT INTO `planner_services_list` (`username`, `service_id`, `e_category`, `service_name`, `price`, `status(hide/show)`, `overall_rating`) VALUES ('$username', NULL, '$catId', '$serviceName', '$price', 'show', '0.0');";
    if (execute($sql)) {
        header("location:My-Plans.php");
    } else {
        echo "<h1>Failed to save</h1>";
    }
}


function getPlanById($id)
{
    $sql = "SELECT * FROM `planner_services_list` where service_id = '$id'";
    $data = getColumsValue($sql);
    return $data;
}

function editPlanByID($id)
{
}

if (isset($_POST['edit_plan'])) {
    $catId = $_POST['cat_id'];
    $price = $_POST['price'];
    $serviceName = $_POST['service_name'];
    $id = $_GET['serviceId'];

    $sql = "UPDATE `planner_services_list` SET `e_category` = '$catId', `service_name` = '$serviceName', `price` = '$price' WHERE `planner_services_list`.`service_id` = $id;";
    if (execute($sql)) {
        header("location:My-Plans.php");
    } else {
        echo "<h1>Failed to save</h1>";
    }
}

//UPDATE `planner_services_list` SET `e_category` = '1', `service_name` = 'birthday event', `price` = '22000' WHERE `planner_services_list`.`service_id` = 4;
