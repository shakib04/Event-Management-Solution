<?php

require_once "session-code.php";
require_once "../model/database-conn.php";
require_once "../controller/UserController.php";
require_once "../controller/PlannerController.php";

$newUnapprovedUser = getAllUnApprovedUser();

$newApprovedUser = getAllApprovedUser();

$newUnApprovedPlanner = getAllUnApprovedPlanner();


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

        .active-new-reg {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <?php include_once "nav-bar.php" ?>
    <div class="new-planner-list">
        <h2>New Registered <span style="background-color: #9b59b6; color:white ">Planners</span> List</h2>
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

            <?php
            foreach ($newUnApprovedPlanner as $user) {
                echo "<tr>";

                echo '<td> <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> </td>';
                echo "<td>Unapproved</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['full_address'] . "</td>";
                echo "<td>" . $user['phone_number'] . "</td>";
                //echo "<td>" . $user['phone_number'] . "</td>";
                echo "<td><a href='?username=" . $user['username'] . "&approve=yes'>Approve</a></td>";
                echo "<td><a href=''>Delete</a></td>";

                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="new-client-list">
        <h2>New Registered <span style="background-color: #0984e3; color:white ">Users(Client)</span> List</h2>
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

            <?php
            foreach ($newUnapprovedUser as $user) {

                echo "<tr>";


                echo '<td> <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> </td>';
                echo "<td style='color: red;'>Unapproved</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['full_address'] . "</td>";
                echo "<td>" . $user['phone_number'] . "</td>";
                //echo "<td>" . $user['phone_number'] . "</td>";
                echo "<td><a href='?username=" . $user['username'] . "&approve=yes'>Approve</a></td>";
                echo '<td><a onclick="return confirm(\'Are you sure you want to delete this user?\');" href="">Delete</a></td>';

                echo "</tr>";
            }
            ?>
        </table>
    </div>


    <div class="new-client-list">
        <h2>New Approved Users(Client) List</h2>
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

            <?php

            foreach ($newApprovedUser as $user) {

                echo "<tr>";

                echo "<td>" . $user['username'] . "</td>";
                echo "<td>Approved</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['full_address'] . "</td>";
                echo "<td>" . $user['phone_number'] . "</td>";
                //echo "<td>" . $user['phone_number'] . "</td>";
                echo "<td><a href='?username=" . $user['username'] . "&approve=no'>Unapprove</a></td>";
                echo "<td><a href=''>Delete</a></td>";

                echo "</tr>";
            }
            ?>
            <!-- <tr>
                <td>sohan05</td>
                <td>Unapproved</td>
                <td>sohan05@gmail.com</td>
                <td>Mirpur,Dhaka</td>
                <td>016455445</td>
                <td><a href="">Unapprove</a></td>
                <td><a href="">Delete</a></td>
            </tr> -->
        </table>
    </div>
</body>

</html>