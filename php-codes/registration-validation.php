<?php

require_once "database-conn.php";

// function validate($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlentities($data);
//     return $data;
// }
$err_fullname = $err_username = $err_password = $err_fname = $err_cfpassword = $err_email = $err_phoneNumber = $err_address = $err_gender = $errType = "";
$fullname = $username = $password = $fname = $cfpassword = $email = $phoneNumber = $address = $type = "";
//$temp_username = $temp_password = $temp_fname = $temp_user_type = $temp_email = $temp_phone_number = $temp_address = $temp_local_address = "";


$validCount = 0;

if (isset($_POST['register'])) {

    //fullname validation 1

    if (empty(trim($_POST['fullname']))) {
        $err_fullname = "<span style='color:red;'> Name is Required </span>";
    } else {
        $fullname = htmlspecialchars($_POST['fullname']);
        $validCount++;
    }


    //username validation 2

    if (empty(trim($_POST['username']))) {
        $err_username = "<span style='color:red;'>Username is Required</span>";
    } elseif (strlen($_POST['username']) < 5) {
        $err_username = "Username must be 5 Charectors Long";
    } elseif (strlen($_POST['username']) > 10) {
        $err_username = "Username cannot be more than 10 Charectors Long";
    } elseif (strpos($_POST['username'], " ")) {
        $err_username = "Space is not Allowed";
    } else {
        $username = validate($_POST['username']);
        $validCount++;
    }


    //type validation 3

    if (!isset($_POST['type'])) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    } elseif ($_POST['type'] == "1") {
        $type = "user";
        $validCount++;
    } elseif ($_POST['type'] == "2") {
        $type = "planner";
        $validCount++;
    } else {
        $err_type = "<span style='color:red;'>Invalid Selection! </span>";
    }



    //password validation

    if (empty(trim($_POST['password']))) {
        $err_password = "<span style='color:red;'> Password is Required </span>";
    } elseif (strlen($_POST['password']) < 8) {
        $err_password = "<span style='color:red;'>Password must contain at least 8 character </span>";
    } elseif (strlen($_POST['password']) > 32) {
        $err_password = "<span style='color:red;'>Password must contain less than 32 character </span>";
    }
    //elseif (!strpos($_POST['password'], "#")) {
    //     $err_password = "<span style='color:red;'>Password must contain 1 special character # </span>";
    // } 
    // elseif (!strpos($_POST['password'], "1")) {
    //     $err_password = "<span style='color:red;'>Password must contain 1 number  </span>";
    // } 

    elseif (ctype_upper($_POST['password'])) {
        $err_password = "<span style='color:red;'>Password must contain 1 Lowercase  </span>";
    } elseif (ctype_lower($_POST['password'])) {
        $err_password = "<span style='color:red;'>Password must contain 1 Uppercase  </span>";
    } else {
        $password = validate($_POST['password']);
        $validCount++;
    }




    //confirm password validation

    if (empty(trim($_POST['cfpassword']))) {
        $err_cfpassword = "<span style='color:red;'>Confirm Password is Required </span>";
    } elseif ($password != $_POST['cfpassword']) {
        $err_cfpassword = "<span style='color:red;'>Password does not match</span>";
    } else {
        $cfpassword = $_POST['cfpassword'];
        $validCount++;
    }



    //gender validation

    if (!isset($_POST['gender'])) {
        $err_gender = "<span style='color:red;'> (Must Select 1) </span>";
    } elseif ($_POST['gender'] == "1") {
        $gender = "male";
        $validCount++;
    } elseif ($_POST['gender'] == "2") {
        $gender = "female";
        $validCount++;
    } elseif ($_POST['gender'] == "3") {
        $gender = "others";
        $validCount++;
    } else {
        $err_gender = "<span style='color:red;'> (Invalid Selection) </span>";
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
            $email = htmlspecialchars($_POST['email']);
            $validCount++;
        } else {
            $err_email = "<span style='color:red;'> Email is not valid </span>";

            //
        }
    }



    //Phone number fields will only accept numeric value.

    if (empty(trim($_POST['contactNumber']))) {
        $err_phoneNumber = "<span style='color:red;'> Phone Number is Required </span>";
    } elseif (!is_numeric($_POST['contactNumber'])) {
        $err_phoneNumber = "<span style='color:red;'> Number is not valid (only numeric) </span>";
    } elseif (strpos($_POST['contactNumber'], " ")) {
        $err_phoneNumber = "<span style='color:red;'> Space is not Allowed </span>";
    } else {
        $phoneNumber = $_POST['contactNumber'];
        $validCount++;
    }



    //address 9

    if (empty(trim($_POST['address']))) {
        $err_address = "<span style='color:red;'> address is Required </span>";
    } else {
        $address = htmlspecialchars($_POST['address']);
        $validCount++;
    }


    $newUser = true;
    if ($validCount == 9) {
        //create a templete
        $sql = "select username from all_registered_users where username = ?;";
        //create a prepared statement
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
        } else {
            //bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "s", $username);
        }

        //run params inside database
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        //print_r(mysqli_num_rows($result));

        if (mysqli_num_rows($result) == 1) {
            $err_username = "<span style='color:red;'>Username already Registered </span>";
            $newUser = false;
        }
    }

    //echo $validCount;

    if ($validCount == 9 && $newUser) {

        //first check duplicate user 

        //create a templete
        $sql = "INSERT INTO `all_registered_users` (`Full_Name`, `username`, `password`, gender, `type`, `approved`, `email`, `phone_number`, `full_address`, registration_date) VALUES ('$fullname', '$username', '$password', '$gender', '$type', 'no', '$email', '$phoneNumber', '$address','" . date("Y/m/d") . "')";
        if (execute($sql)) {
            echo "<span class='succuess message-btn'>Registration Success</span>";
        } else {
            echo "<span class='failed message-btn'>Failed To Register</span>";
        }

        //header("Location: login.php");
    }
}


function checkUser($username)
{
    $sql = "select * from all_registered_users where username = '$username';";
    $result = getColumsValue($sql);
    if (count($result) > 0) {
        return true;
    }
    return false;
}

if (isset($_GET['username'])) {
    $getUsername = $_GET['username'];
    if (checkUser($getUsername)) {
        echo "<span style='color:red;'>Username is Taken</span>";
    } else {
        echo "<span style='color:green;'>Username is Available</span>";
    }
}
