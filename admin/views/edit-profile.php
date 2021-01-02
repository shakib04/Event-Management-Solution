<?php

require_once "session-code.php";

require_once "../controller/UserController.php";

$columns = getUserDetails($_SESSION['username']);
require_once "../controller/ProfileController.php";


echo "<pre>";
//print_r($admin);
echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile </title>

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

        form {
            margin: 30px auto;
            width: 800px;
        }

        td>span {
            color: red;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <a href="profile.php">Go Back to My Profile</a>
    <form action="" method="POST" onsubmit="return profileValidation()">
        <h4>Edit Profile of <?php echo $_SESSION['username']; ?></h4>
        <table>
            <tr>
                <td>Full Name</td>
                <td>
                    <input type="text" name="fullname" id="fullname" value="<?php echo $fullname; ?>"> <?php echo $err_fullname ?>
                    <span id="erName"></span>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>" id="email"> <?php echo $err_email ?>
                    <span id="erEmail"></span>
                </td>
            </tr>
            <tr>
                <td>Gender <?php echo $err_gender ?></td>
                <td>
                    <input type="radio" name="gender" id="" value="Male" checked> Male
                    <input type="radio" name="gender" id="" value="Female"> Female
                </td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td>
                    <input type="text" name="contact" id="contact" value="<?php echo $contact; ?>"> <?php echo $err_contact; ?>
                    <span id="erContact"></span>
                </td>
            </tr>

            <tr>
                <td>Local Address</td>
                <td>
                    <textarea name="address" id="address"> <?php echo $address; ?></textarea> <?php echo $err_address ?>
                    <span id="erAddress"></span>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>
<script src="js/edit-user-validation.js"></script>

</html>