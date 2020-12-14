<?php

require_once "common-codes/session-code.php";
require_once "validation/edit-profile-validation.php";


echo "<pre>";
//print_r($admin);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

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
    </style>
</head>

<body>
    <a href="my-profile.php">Go Back to My Profile</a>
    <form action="" method="POST">
        <h4>Edit Profile of <?php echo $_SESSION['username']; ?></h4>
        <table>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname" id="" value="<?php echo $fullname; ?>"> <?php echo $err_fullname ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" value="<?php echo $email; ?>" id=""> <?php echo $err_email ?>
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
                    <input type="text" name="contact" id="" value="<?php echo $contact; ?>"> <?php echo $err_contact; ?>
                </td>
            </tr>

            <tr>
                <td>Local Address</td>
                <td>
                    <textarea name="address" id=""> <?php echo $address; ?></textarea> <?php echo $err_address ?>
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

</html>