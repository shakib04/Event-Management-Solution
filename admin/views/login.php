<?php

session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['type'] == "admin") {
        header("location:dashboard-admin.php");
    }
}

require_once("validation/login-validation.php");
?>

<html>

<head>
    <title>Registration</title>

    <link rel="stylesheet" href="css/reset.css">

    <style>
        

        td {
            font-weight: bold;
        }

        form {
            border: 1px solid darkblue;
            width: 400px;
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

        .login-box {
            background-color: dimgray;
            padding: 10px;
            color: white;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <div class="login-box">Login</div>
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
        <?php echo $invalidCred; ?>
    </form>
   
</body>

</html>