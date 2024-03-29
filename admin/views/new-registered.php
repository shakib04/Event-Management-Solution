<?php

require_once "session-code.php";
require_once "../model/database-conn.php";
require_once "../controller/UserController.php";
require_once "../controller/PlannerController.php";

$newUnapprovedUser = getAllUnApprovedUser();

$newApprovedUser = getAllApprovedUser();

$newUnApprovedPlanner = getAllUnApprovedPlanner();

if (isset($_GET['username']) && isset($_GET['delete']) && isset($_GET['type'])) {
    if (strtolower($_GET['type']) == "planner") {
        $result = deletePlanner($_GET['username']);
        if (!$result) {
            echo "<h1 style='color:red;'>This Planner has Some Service List. Can Not Delete</h1>";
        } else {
            echo "<h1>Deleted Success</h1>";
            sleep(5);
            header("location:new-registered.php");
        }
    } elseif (strtolower($_GET['type']) == "user") {
        $result = deleteUser($_GET['username']);
        if (!$result) {
            echo "<h1>This User has Some Purchase List. Can Not Delete</h1>";
        } else {
            echo "<h1>Deleted Success</h1>";
            sleep(5);
            header("location:new-registered.php");
        }
    }
}


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

        h3 {
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php include_once "nav-bar.php" ?>
    <div class="new-planner-list">
        <h3 class="heading-3">New Registered <span style="background-color: #9b59b6; color:white ">Planners</span> List [Order by Registration Date]</h3>
        <table>
            <tr>
                <th>username</th>
                <th>Status</th>
                <th>Created Time</th>
                <th>Email</th>
                <th>Location</th>
                <th>Contact No</th>
                <th>Approve</th>
                <th>Delete</th>
            </tr>

            <?php
            foreach ($newUnApprovedPlanner as $user) {
                $regDate = explode("-", $user['registration_date']);
                echo "<tr>";

                echo '<td> <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> </td>';
                echo "<td style='color: red;'>Unapproved</td>";
                echo "<td> $regDate[2]/$regDate[1]/$regDate[0]</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['full_address'] . "</td>";
                echo "<td>" . $user['phone_number'] . "</td>";
                //echo "<td>" . $user['phone_number'] . "</td>";
                echo "<td><a href='?username=" . $user['username'] . "&approve=yes'>Approve</a></td>";
                echo '<td><a onclick="return confirm(\'Are you sure you want to delete this user?\');" href="?username=' . $user['username'] . '&delete=yes&type=' . $user['type'] . '">Delete</a></td>';

                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <div class="new-client-list">
        <h3>New Registered <span style="background-color: #0984e3; color:white ">Users(Client)</span> List[Order by Registration Date]</h3>
        <table>
            <tr>
                <th>username</th>
                <th>Status</th>
                <th>Created</th>
                <th>email</th>
                <th>Location</th>
                <th>Contact No</th>
                <th>Approve</th>
                <th>Delete</th>
            </tr>

            <?php
            foreach ($newUnapprovedUser as $user) {
                $regDate = explode("-", $user['registration_date']);
                echo "<tr>";


                echo '<td> <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> </td>';
                echo "<td style='color: red;'>Unapproved</td>";
                echo "<td> $regDate[2]/$regDate[1]/$regDate[0]</td>";
                echo "<td>" . $user['email'] . "</td>";
                echo "<td>" . $user['full_address'] . "</td>";
                echo "<td>" . $user['phone_number'] . "</td>";
                echo "<td><a href='?username=" . $user['username'] . "&approve=yes'>Approve</a></td>";
                echo '<td><a onclick="return confirm(\'Are you sure you want to delete this user?\');" href="?username=' . $user['username'] . '&delete=yes&type=' . $user['type'] . '">Delete</a></td>';

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