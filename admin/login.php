<?php

session_start();
if (isset($_SESSION['username'])) {
    header('Location:dashboard-admin.php');
}

require_once("validation/login-validation.php");
?>

<html>

<head>
    <title>Registration</title>

    <style>
        td {
            font-weight: bold;
        }

        form {
            border: 1px solid darkblue;
            width: 300px;
            margin: 0 auto;
            margin-top: 20%;
            padding: 3%;
        }

        form input {
            padding: 5px;
        }

        input[type=submit],
        input[type=reset] {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div style="background-color: dimgray; padding: 10px; color:white; font-size: 20px;">Login</div>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id=""><?php echo $err_username; ?></td>
            </tr>

            <tr>
                <td>Password: </td>
                <td>
                    <input type="text" name="password" id=""> <?php echo $er_password; ?>
                </td>
            </tr>

            <tr>
                <td><input type="reset" name="" id=""></td>
                <td><input type="submit" id="" name="login" value="Login"></td>
            </tr>
        </table>
    </form>

</body>

</html>