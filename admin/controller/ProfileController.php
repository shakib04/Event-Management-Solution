<?php

require_once "../model/database-conn.php";

$err_fullname = $err_username = $err_password = $err_cfpassword = $err_email = $err_contact = $err_address = $err_gender = "";

//$fullname = $email = $gender = $contact = $address = "";


$sql = "SELECT * FROM `all_registered_users` where username = '" . $_SESSION['username'] . "'";
$columns = getColumsValue($sql);

$fullname = $columns[0]['Full_Name'];
$email = $columns[0]['email'];
$type = $columns[0]['type'];
$gender = $columns[0]['gender'];
$contact = $columns[0]['phone_number'];
$address = $columns[0]['full_address'];
$profile_pic_address = $columns[0]['profile_pic'];



function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

$validCount = 0;



if (isset($_POST['submit'])) {

    //full name validation 1

    if (empty(trim($_POST['fullname']))) {
        $err_fullname = "<span style='color:red;'> Name is Required </span>";
    } else {
        $fullname = validate($_POST['fullname']);
        $validCount++;
    }

    //gender validation 2

    if (!isset($_POST['gender'])) {
        $err_gender = "<span style='color:red;'> (Must Select 1) </span>";
    } else {
        $gender = validate($_POST['gender']);
        $validCount++;
    }

    //email validation 3

    if (empty(trim($_POST['email']))) {
        $err_email = "<span style='color:red;'> Email is Required </span>";
    } elseif (strpos($_POST['email'], " ")) {
        $err_email = "<span style='color:red;'> Space is not Allowed </span>";
    } elseif (!strpos($_POST['email'], "@") or !strpos($_POST['email'], ".")) {
        $err_email = "<span style='color:red;'> Email is not valid. No [@] </span>";
    } elseif (strpos($_POST['email'], "@")) {
        $atRatePos = strpos($_POST['email'], "@");
        $tempEmail = $_POST['email'];
        $hasDot = false;

        for ($i = $atRatePos; $i < strlen($tempEmail); $i++) {
            if ($tempEmail[$i] == ".") {
                $hasDot = true;
                break;
            }
        }

        if ($hasDot) {
            $email = validate($_POST['email']);
            $validCount++;
        } else {
            $err_email = "<span style='color:red;'> Email is not valid </span>";
        }
    }


    //Phone number fields will only accept numeric value. 4

    if (empty(trim($_POST['contact']))) {
        $err_contact = "<span style='color:red;'> Phone Number is Required </span>";
    } elseif (!is_numeric($_POST['contact'])) {
        $err_contact = "<span style='color:red;'> Number is not valid (only numeric) </span>";
    } elseif (strpos($_POST['contact'], " ")) {
        $err_contact = "<span style='color:red;'> Space is not Allowed </span>";
    } else {
        $contact = validate($_POST['contact']);
        $validCount++;
    }


    //address validation 5

    if (empty(trim($_POST['address']))) {
        $err_address = "<span style='color:red;'> Address is Required </span>";
    } else {
        $address = validate($_POST['address']);
        $validCount++;
    }

    if ($validCount == 5) {
        $sql = "UPDATE `all_registered_users` SET `Full_Name` = '$fullname', `gender` = '$gender', `email` = '$email', `phone_number` = '$contact', `full_address` = '$address' WHERE `all_registered_users`.`username` = '" . $_SESSION['username'] . "';";
        if (execute($sql)) {
            header("location: profile.php");
        } else {
            echo "Failed to Save";
        }
    }
}





//show admin profile
function profileDetais()
{
    $sql = "SELECT * FROM `all_registered_users` where username = '" . $_SESSION['username'] . "'";
    $columns = getColumsValue($sql);
    return $columns;
}