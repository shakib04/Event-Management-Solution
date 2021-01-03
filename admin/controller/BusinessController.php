<?php

require_once "../model/database-conn.php";

if (isset($_POST['get_purchase_data'])) {

    if ($_POST['start_date'] == "") {
        $err_start_date = "Start Date Missing";
    } else {
        $start_date = $_POST['start_date'];
        $validCount++;
    }
    if ($_POST['end_date'] == "") {
        $err_end_date = "End Date Missing!";
    } else {
        $end_date = $_POST['end_date'];
        $validCount++;
    }

    if ($validCount == 2) {
        if ($start_date > $end_date) {
            $err_start_date = "Start Date is Higher";
            $validCount = 0;
        }
    }

    if (isset($_POST['paid']) and isset($_POST['unpaid'])) {
    } elseif (isset($_POST['paid'])) {
        $status = $_POST['paid'];
        $validCount++;
    } elseif (isset($_POST['unpaid'])) {
        $status = $_POST['unpaid'];
        $validCount++;
    }
}

function getPaidAmountSum()
{
    $sql = "SELECT SUM(service_price) paidAmountSum FROM `purchased_services_details` WHERE `status(paid/unpaid)` = 'paid';";
    $data = getColumsValue($sql);
    return $data;
}

function getUnPaidAmountSum()
{
    $sql = "SELECT SUM(service_price) unpaidAmountSum FROM `purchased_services_details` WHERE `status(paid/unpaid)` = 'unpaid';";
    $data = getColumsValue($sql);
    return $data;
}

function getAmountSum()
{
    $sql = "SELECT SUM(service_price) amountSum FROM `purchased_services_details`;";
    $data = getColumsValue($sql);
    return $data;
}

function getPurchaseDetailsByDate($startDate, $endDate, $status)
{
    $sql = "SELECT * FROM `purchased_services_details` WHERE purchased_date BETWEEN '$startDate' and '$endDate' and `status(paid/unpaid)` = '$status';";
    $data = getColumsValue($sql);
    return $data;
}

function getPurchaseDetailsByDate2($startDate, $endDate)
{
    $sql = "SELECT * FROM `purchased_services_details` WHERE purchased_date BETWEEN '$startDate' and '$endDate';";
    $data = getColumsValue($sql);
    return $data;
}

function totalPaidAmount($startDate, $endDate)
{
    $sql = "SELECT SUM(service_price) total  FROM `purchased_services_details` WHERE `purchased_date` BETWEEN '$startDate' and '$endDate' and `status(paid/unpaid)` = 'paid';";
    $data = getColumsValue($sql);
    return $data;
}
