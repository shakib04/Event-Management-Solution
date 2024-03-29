<?php

require_once "../model/database-conn.php";

//approve and unapprove users
if (isset($_GET['username']) and isset($_GET['approve'])) {
    $updateApproveQuery = "UPDATE `all_registered_users` SET `approved` = '" . $_GET['approve'] . "' WHERE `all_registered_users`.`username` = '" . $_GET['username'] . "';";
    execute($updateApproveQuery);
    header("location:new-registered.php");
}

//get all unapproved user
function getAllUnApprovedUser()
{
    $sql = "SELECT * FROM `all_registered_users` WHERE type = 'user' and approved = 'no' ORDER BY `registration_date` DESC;";
    $newUnapprovedUser = getColumsValue($sql);
    return $newUnapprovedUser;
}


//get all Approved user
function getAllApprovedUser()
{
    $allApproveUserSql = "SELECT * FROM `all_registered_users` WHERE type = 'user' and approved = 'yes';";
    $newApprovedUser = getColumsValue($allApproveUserSql);
    return $newApprovedUser;
}


//search user
function searchUser($name, $type)
{
    //all_registered_users.username = purchased_services_details.client_username AND
    $sqlSearchUser = "SELECT * FROM `all_registered_users` WHERE all_registered_users.type = '$type' and (all_registered_users.username LIKE '%$name%' or all_registered_users.Full_Name LIKE '%$name%');";
    $data = getColumsValue($sqlSearchUser);
    return $data;
}


//43000 image for traffic sign 
function allUser()
{
    $allUserQuery = "SELECT * FROM `all_registered_users` WHERE type = 'user';";
    $data = getColumsValue($allUserQuery);
    return $data;
}

function getUserDetails($username)
{
    $sqlUserDetails = "SELECT * FROM `all_registered_users` WHERE username = '" . $username . "';";
    $allData = getColumsValue($sqlUserDetails);
    return $allData;
}

function getUserPurchaseDetails($username)
{
    $sqlPurchaseDetails = "SELECT * FROM all_registered_users aru,purchased_services_details psd, planner_services_list psl WHERE aru.username = psd.client_username and psd.service_id = psl.service_id and aru.username = '" . $username . "';";
    $data = getColumsValue($sqlPurchaseDetails);
    return $data;
}


//delete by username
function deleteUser($username)
{
    $sql = "DELETE FROM `all_registered_users` WHERE `all_registered_users`.`username` ='$username'";
    $result = execute($sql);
    return $result;
}

 function getAllTypeNewUser()
{
    $sql = "SELECT * FROM `all_registered_users` ORDER BY `registration_date` DESC LIMIT 0,3";
    $result = execute($sql);
    return $result;
}