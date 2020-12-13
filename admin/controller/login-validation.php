<?php


function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}
$err_login_username = $err_login_password = $login_username = $login_password = $invalidCred = "";

$validCount = 0;

if (isset($_POST['login'])) {


    if (empty(trim($_POST['username']))) {
        $err_login_username = "<span style='color:red;'>Username is Required</span>";
    } else {
        $login_username = validate($_POST['username']);
        $validCount++;
    }

    if (empty(trim($_POST['password']))) {
        $err_login_password = "<span style='color:red;'> Password is Required </span>";
    } else {
        $login_password = validate($_POST['password']);
        $validCount++;
    }

    if ($validCount == 2) {

        $flag = false;
        require_once "database-conn.php";
        $sql = "select username, password, type from all_registered_users where username = ? and password = ?;";

        //create a prepared statement
        $stmt = mysqli_stmt_init($conn);

        //prepare the prepared statement
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Sql Statement Failed";
        } else {
            //bind parameters to the placeholder
            mysqli_stmt_bind_param($stmt, "ss", $login_username, $login_password);
            //run parameter inside database
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $type = strtolower($row['type']);
                $flag = true;
            }
        }

        if ($flag) {
            $_SESSION['username'] = $login_username;
            $_SESSION['type'] = $type;
            //if ($type == "admin") {

            header("Location: profile.php");
            //}
        } else {
            $invalidCred = "<span class='error-message'>Invalid Username and Password</span>";
        }
    }
}
