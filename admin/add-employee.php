<?php
require_once "common-codes/session-code.php";

require_once "validation/add-employee-validation.php";

$data = simplexml_load_file("data.xml");
$user = $data->user;

foreach ($user as $user1) {
    if ($user1->username == $_SESSION['username']) {
        $type = $user1->type;
        break;
    }
}

if (strtolower($type) != "admin") {
    header("location: dashboard-admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <style>
        .active-add-new-employee {
            background-color: aliceblue;
        }

        form.add-employee {
            width: 1000px;
            margin: 20px auto;
        }

        .add-employee input {}

        td {
            padding: 6px;
        }

        input {
            padding: 3px;
        }
    </style>
</head>

<body>
    <?php include_once "common-codes/nav-bar.php" ?>
    <form action="" method="post" class="add-employee">
        <h2>Add New Employee </h2>
        <table>
            <tr>
                <td>Full Name: </td>
                <td><input type="text" name="fullname" id=""><?php echo $err_fullname; ?></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id=""><?php echo $err_username; ?></td>
            </tr>

            <tr>
                <td>Password: </td>
                <td>
                    <input type="text" name="password" id=""> <?php echo $err_password; ?>
                </td>
            </tr>


            <tr>
                <td>Confirm Password</td>
                <td>
                    <input type="text" name="cfpassword" id="" value="<?PHP //echo $cfpassword; 
                                                                        ?>"> <?php echo $err_cfpassword; ?>
                </td>
            </tr>

            <tr>
                <td>User Type</td>
                <td>
                    <select name="type" id="" style="width: 100%;">
                        <option value="Employee" selected>Employee</option>
                    </select> <?php echo $err_type; ?>
                </td>
            </tr>
            <tr>
                <td>Gender:
                    <?php echo $err_gender; ?>
                </td>
                <td>
                    <input type="radio" name="gender" id="" value="Male">Male
                    <input type="radio" name="gender" id="" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" id=""><?php echo $err_email; ?></td>
            </tr>

            <tr>
                <td>Contact Number: </td>
                <td><input type="number" name="contactNumber" id=""><?php echo $err_phoneNumber; ?></td>
            </tr>

            <tr>
                <td>Address: </td>
                <td>
                    <textarea name="address" id="" cols="" rows=""> <?php echo $address; ?></textarea>
                    <?php echo $err_address; ?>
                </td>
            </tr>

            <tr>
                <td><input type="reset" name="" id=""></td>
                <td><input type="submit" id="" name="register" value="Add"></td>
            </tr>
        </table>
        echo $err_user_registered;
    </form>
</body>

</html>