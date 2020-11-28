<?php

session_start();

require_once "php-codes/database-conn.php";

if (isset($_POST['save-pro-pic'])) {

    if (!isset($_FILES['Propic'])) {
    } else {
        $filename = $_FILES['Propic']['name'];
        //echo $file_type = $_FILES['Propic']['type'];
        $file_type = strtolower(pathinfo(basename($filename), PATHINFO_EXTENSION));
        $dir = "profiles/images/";
        $customName = $_SESSION['username'] . "-profile-pic";
        $target_file = $dir . $customName . "." . $file_type;
        $file_tmp_name = $_FILES['Propic']['tmp_name'];


        if (move_uploaded_file($file_tmp_name, $target_file)) {
            $query = "update all_users_profile set profile_pic = '$target_file' where username = '" . $_SESSION['username'] . "';";
            if (execute($query)) {
                echo "Succussfully Upload";
            } else {
                echo "Failed to Upload";
            }
        } else {
            echo "Failed to Upload";
        }
    }
}



$sql = "SELECT * FROM `all_registered_users` where username = '" . $_SESSION['username'] . "'";
echo "<pre>";
//print_r(getColumsValue($sql));
echo "</pre>";
$columns = getColumsValue($sql);

$fullname = $columns[0]['Full_Name'];
$email = $columns[0]['email'];
$type = $columns[0]['type'];
$gender = $columns[0]['gender'];
$contact = $columns[0]['phone_number'];
$address = $columns[0]['full_address'];

$sql = "SELECT profile_pic from `all_users_profile` where username =  '" . $_SESSION['username'] . "';";
$columns = getColumsValue($sql);
$profile_pic_address = $columns[0]['profile_pic'];



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }

        tr:nth-child(odd) {
            background-color: aliceblue;
        }

        tr:nth-last-child(even) {
            background-color: whitesmoke;
        }

        .my-profile {
            margin: 30px auto;
            width: 800px;
        }

        .active-my-profile {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <?php //include_once "common-codes/nav-bar.php" 
    ?>


    <form action="" method="post" enctype="multipart/form-data">
        <label for="Propic">Profile Pic</label>
        <input type="file" name="Propic" id="">
        <input type="submit" value="Save" name="save-pro-pic">
    </form>
    <div class="my-profile">
        <h2>My Profile Details</h2>
        <div class="profile-pic">
            <img src="<?php echo $profile_pic_address; ?>" width="150" height="150" alt="">
        </div>
        <table>
            <tr>
                <td>username</td>
                <td><?php echo $_SESSION['username'];
                    ?></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td><?php echo $fullname;
                    ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?php echo $email;
                    ?></td>
            </tr>

            <tr>
                <td>User Type</td>
                <td><?php echo $type;
                    ?></td>
            </tr>

            <tr>
                <td>Gender</td>
                <td><?php echo $gender;
                    ?></td>
            </tr>


            <tr>
                <td>Phone Number:</td>
                <td><?php echo $contact;
                    ?></td>
            </tr>

            <tr>
                <td>Address</td>
                <td><?php echo $address;
                    ?></td>
            </tr>

            <tr>

                <td colspan="2"><a href="edit-profile.php">Edit Profile</a></td>
            </tr>
        </table>
    </div>
</body>

</html>