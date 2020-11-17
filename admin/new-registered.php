<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }

        .new-planner-list,
        .new-client-list {
            margin: 30px auto;
            width: 800px;
        }
    </style>
</head>

<body>
    <?php include_once "common-codes/nav-bar.php" ?>
    <div class="new-planner-list">
        <h2>New Registered Planners List</h2>
        <table>
            <tr>
                <th>username</th>
                <th>Status</th>
                <th>email</th>
                <th>Location</th>
                <th>Contact No</th>
                <th>Approve</th>
                <th>Delete</th>
            </tr>

            <tr>
                <td>shakib001</td>
                <td>Unapproved</td>
                <td>shakib1@gmail.com</td>
                <td>Uttara,Dhaka</td>
                <td>013453434</td>
                <td><a href="">Approve</a></td>
                <td><a href="">Delete</a></td>
            </tr>
            <tr>
                <td>sohan05</td>
                <td>Unapproved</td>
                <td>sohan05@gmail.com</td>
                <td>Mirpur,Dhaka</td>
                <td>016455445</td>
                <td><a href="">Approve</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        </table>
    </div>
    <div class="new-client-list">
        <h2>New Registered Users(Client) List</h2>
        <table>
            <tr>
                <th>username</th>
                <th>Status</th>
                <th>email</th>
                <th>Location</th>
                <th>Contact No</th>
                <th>Approve</th>
                <th>Delete</th>
            </tr>

            <tr>
                <td>shakib001</td>
                <td>Unapproved</td>
                <td>shakib1@gmail.com</td>
                <td>Uttara,Dhaka</td>
                <td>013453434</td>
                <td><a href="">Approve</a></td>
                <td><a href="">Delete</a></td>
            </tr>
            <tr>
                <td>sohan05</td>
                <td>Unapproved</td>
                <td>sohan05@gmail.com</td>
                <td>Mirpur,Dhaka</td>
                <td>016455445</td>
                <td><a href="">Approve</a></td>
                <td><a href="">Delete</a></td>
            </tr>
        </table>
    </div>
</body>

</html>