<?php

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}
$err_username = $er_password = $username = $password = "";

$hasError = true;
$validCount = 0;

if (isset($_POST['login'])) {


    if (empty(trim($_POST['password']))) {
        $err_username = "<span style='color:red;'>Username is Required</span>";
        $hasError = true;
    } else {
        $username = validate($_POST['username']);
        $hasError = false;
        $validCount++;
    }

    if (empty(trim($_POST['password']))) {
        $er_password = "<span style='color:red;'> Password is Required </span>";
        $hasError = true;
    } else {
        $password = validate($_POST['password']);
        $hasError = false;
        $validCount++;
    }

    if ($validCount == 2) {
        $admins = simplexml_load_file("data.xml");
        $admin = $admins->admin;
        $flag = false;

        foreach ($admin as $user) {
            //echo $user->username . "  " . $user->password . "<br>";
            //echo $username . "  " . $password . "<br>";
            if ($user->username == $username && $user->password == $password) {
                $flag = true;
                break;
            }
        }

        if ($flag) {
            $_SESSION['username'] = $username;
            header("Location: dashboard-admin.php");
            $_POST['username'] = $username;
        } else {
            echo "Invalid Username and Password";
        }
    }
}
