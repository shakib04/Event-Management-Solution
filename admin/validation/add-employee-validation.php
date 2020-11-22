<?php

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}
$err_fullname = $err_username = $err_password = $err_fname = $err_cfpassword = $err_email = $err_phoneNumber = $err_address = $err_gender = $err_type = $err_user_registered = "";
$fullname = $username = $password = $fname = $cfpassword = $email = $phoneNumber = $address = $type = "";
$temp_username = $temp_password = $temp_fname = $temp_user_type = $temp_email = $temp_phone_number = $temp_address = $temp_local_address = "";


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



    //password validation 3

    if (empty(trim($_POST['password']))) {
        $err_password = "<span style='color:red;'> Password is Required </span>";
    } elseif (strlen($_POST['password']) < 8) {
        $err_password = "<span style='color:red;'>Password must contain at least 8 character </span>";
    } elseif (!strpos($_POST['password'], "#")) {
        $err_password = "<span style='color:red;'>Password must contain 1 special character # </span>";
    } elseif (!strpos($_POST['password'], "1")) {
        $err_password = "<span style='color:red;'>Password must contain 1 number  </span>";
    } elseif (ctype_upper($_POST['password'])) {
        $err_password = "<span style='color:red;'>Password must contain 1 Lowercase  </span>";
    } elseif (ctype_lower($_POST['password'])) {
        $err_password = "<span style='color:red;'>Password must contain 1 Uppercase  </span>";
    } else {
        $password = validate($_POST['password']);
        $validCount++;
    }




    //confirm password validation 4

    if (empty(trim($_POST['cfpassword']))) {
        $err_cfpassword = "<span style='color:red;'>Confirm Password is Required </span>";
    } elseif ($password != $_POST['cfpassword']) {
        $err_cfpassword = "<span style='color:red;'>Password does not match</span>";
    } else {
        $cfpassword = $_POST['cfpassword'];
        $validCount++;
    }


    //user type validation 5

    if (empty(trim($_POST['type']))) {
        $err_type = "<span style='color:red;'>Select 1 </span>";
    } elseif ($_POST['type'] != "Employee") {
        $err_type = "<span style='color:red;'>Invalid Choice</span>";
    } else {
        $type = $_POST['type'];
        $validCount++;
    }



    //gender validation 6

    if (!isset($_POST['gender'])) {
        $err_gender = "<span style='color:red;'> (Must Select 1) </span>";
    } else {
        $gender = $_POST['gender'];
        $validCount++;
    }


    //email validation 7

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
        }
    }



    //Phone number fields will only accept numeric value. 8

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

    //save data to admin.xml file

    //echo $validCount;

    if ($validCount == 9) {
        $data = simplexml_load_file("data.xml");
        $flagNewUser = true;
        $user = $data->user;

        foreach ($user as $user1) {
            if ($user1->username == $username) {
                $flagNewUser = false;
                $err_user_registered = "<span style='color: red; font-size: 20px;'> Alreday Registered ! Select Different Username </span>";
                break;
            }
        }


        if ($flagNewUser) {
            $user = $data->addChild("user");
            $user->addChild("fname", $fullname);
            $user->addChild("username", $username);
            $user->addChild("password", $password);
            $user->addChild("gender", $gender);
            $user->addChild("type", $type);
            $user->addChild("email", $email);
            $user->addChild("contact", $phoneNumber);
            $user->addChild("address", $address);

            $newXmlobj = new DOMDocument("1.0");
            $newXmlobj->preserveWhiteSpace = false;
            $newXmlobj->formatOutput = true;

            $newXmlobj->loadXML($data->asXML());

            $file = fopen("data.xml", "w");
            fwrite($file, $newXmlobj->saveXML());

            //header("Location: login.php");
            $err_user_registered = "Emloyee Added";
        }
    }


    //echo $_POST['username'];
}


// <root>
//     <user>
//         <fullname>Shakib</fullname>
//         <username>s1</username>
//         <password>s1</password>
//         <gender>s1</gender>
//         <email>s1</email>
//         <contact>s1</contact>
//         <address>s1</address>
//     </user>
// </root>