<?php

require_once "session-code.php";
require_once "../controller/file-upload-validation.php";
require_once "../controller/UserController.php";

$columns = getUserDetails($_SESSION['username']);
require_once "../controller/ProfileController.php";
echo "<pre>";
//print_r($columns);
echo "</pre>";

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
    <?php
    include_once "nav-bar.php";
    ?>

    <div class="my-profile">
        <h2>My Profile Details</h2>
        <div class="upload-profile-pic">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="Propic" id="">
                <input type="submit" value="Change Profile Picture" name="save-pro-pic">
                <?php echo $err_Profile_Pic; ?>
            </form>
        </div>
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