<?php

$err_fullname = $err_username = $err_password = $err_cfpassword = $err_email = $err_contact = $err_address = $err_gender = "";

//$fullname = $email = $gender = $contact = $address = "";

$admins = simplexml_load_file("data.xml");
$admin = $admins->user;
foreach ($admin as $user) {
    if ($user->username == $_SESSION['username']) {
        $fullname = $user->fname;
        $email = $user->email;
        $gender = $user->gender;
        $contact = $user->contact;
        $address = $user->address;
        break;
    }
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}

$validCount = 0;



if (isset($_POST['submit'])) {

    //full name validation

    if (empty(trim($_POST['fullname']))) {
        $err_fullname = "<span style='color:red;'> Name is Required </span>";
    } else {
        $fullname = validate($_POST['fullname']);
        $validCount++;
    }

    //gender validation

    if (!isset($_POST['gender'])) {
        $err_gender = "<span style='color:red;'> (Must Select 1) </span>";
    } else {
        $gender = validate($_POST['gender']);
        $validCount++;
    }

    //email validation

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


    //Phone number fields will only accept numeric value.

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


    //address validation

    if (empty(trim($_POST['address']))) {
        $err_address = "<span style='color:red;'> Address is Required </span>";
    } else {
        $address = validate($_POST['address']);
        $validCount++;
    }



    // $fullname = $_POST['fullname'];
    // $email = $_POST['email'];
    // $gender = $_POST['gender'];
    // $contact = $_POST['contact'];
    // $address = $_POST['address'];
    // $address = $_POST['address'];

    if ($validCount == 5) {
        foreach ($admin as $user) {
            if ($user->username == $_SESSION['username']) {
                $user->fname = $fullname;
                $user->email = $email;
                $user->gender = $gender;
                $user->contact = $contact;
                $user->address = $address;
                break;
            }
        }

        file_put_contents("data.xml", $admins->saveXML());
        header("location: my-profile.php");
    }
}
