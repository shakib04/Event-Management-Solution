<?php

require_once "../model/database-conn.php";

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