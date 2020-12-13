<?php

//approve and unapprove users
if (isset($_GET['username']) and isset($_GET['approve'])) {
    $updateApproveQuery = "UPDATE `all_registered_users` SET `approved` = '" . $_GET['approve'] . "' WHERE `all_registered_users`.`username` = '" . $_GET['username'] . "';";
    execute($updateApproveQuery);
    header("location:new-registered.php");
}

//get all unapproved user
function getAllUnApprovedUser()
{
    $sql = "SELECT * FROM `all_registered_users` WHERE type = 'user' and approved = 'no';";
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
