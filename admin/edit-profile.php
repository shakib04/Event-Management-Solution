<?php
session_start();

if ($_SESSION['username'] == null) {
    header("location: login.php");
}

if (isset($_POST['logout'])) {
    session_unset();
    header("location: login.php");
}
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
    <form action="">
        <h4>Edit Profile of shakib00</h4>
        <table>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="" id="" value="Full Name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="" value="email@ex.com" id="">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" id="" value="Male" checked> Male
                    <input type="radio" name="gender" id="" value="Female"> Female
                </td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td>
                    <input type="text" name="" id="" value="01312456743">
                </td>
            </tr>

            <tr>
                <td>Location</td>
                <td>
                    <textarea name="" id=""> Dhaka</textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>