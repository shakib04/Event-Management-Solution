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
    </style>
</head>

<body>
    <?php include_once "common-codes/nav-bar.php" ?>
    <div class="my-profile">
        <h2>My Profile Details</h2>
        <table>
            <tr>
                <td>username</td>
                <td>shakib001</td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>Md. Shakibul Alam</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>sss@gmail.com</td>
            </tr>

            <tr>
                <td>User Type</td>
                <td>Admin</td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>Male</td>
            </tr>


            <tr>
                <td>Phone Number:</td>
                <td>01433454433</td>
            </tr>

            <tr>
                <td>Location</td>
                <td>Dhaka</td>
            </tr>

            <tr>

                <td colspan="2"><a href="edit-profile.php">Edit Profile</a></td>
            </tr>
        </table>
    </div>
</body>

</html>