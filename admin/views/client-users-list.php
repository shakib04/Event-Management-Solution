<?php

require_once "session-code.php";
require_once "../controller/UserController.php";
require_once "../model/database-conn.php";

$users = allUser();
//echo $users[0]['type'];

if (isset($_GET['username']) && isset($_GET['delete']) && isset($_GET['type'])) {
    if (strtolower($_GET['type']) == "user") {
        $result = deleteUser($_GET['username']);
        if (!$result) {
            echo "<h1>This User has Some Purchase List. Can Not Delete</h1>";
        } else {
            echo "<h1>Deleted Success</h1>";
            header("location:client-users-list.php");
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Event Planners</title>

    <style>
        .planner-card {
            padding: 15px;
            background-color: aliceblue;
            width: 400px;
            float: left;
            margin: 9px;
            line-height: 1.7;
        }

        .all-event-planner {
            margin-left: 100px;
            margin-top: 30px;
        }

        /* .planner-card a{
            color: white;
        }

        .planner-card a:visited{
            color: white;
        } */

        .planner-card .profile-pic {
            width: 100%;
            height: 250px;
        }

        .active-client {
            background-color: aliceblue;
        }

        .search-user {
            width: 70%;
            padding: 5px;
        }

        .search-button {
            padding: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include_once "nav-bar.php" ?>

    <div class="all-event-planner">

        <?php //include_once "search-option.php" 
        ?>

        <span id="type" style="visibility: hidden;">user</span>
        <input type="text" placeholder="Search Here" onkeyup="searchUser(this)" class="search-user">
        <br> <br>

        <script>
            
            var userInfo = '{"type":"user"}';
            var userObj = JSON.parse(userInfo);
        </script>

        <script src="js/live-search.js"></script>


        <h2>All Clients [Order by]</h2>
        <div id="result">
            <?php
            if (count($users) > 0) {
                //echo "<pre>";
                //print_r($users);
                //echo "</pre>";
                foreach ($users as $user) {
                    echo '<div class="planner-card">';

                    echo 'Username: <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> <br>';
                    echo 'Full Name:' . $user['Full_Name'] . '<br>';
                    echo 'Balance:' . $user['balance'] . '<br>';
                    echo 'Email:' . $user['email'] . '<br>';
                    echo 'Phone Number:' . $user['phone_number'] . '<br>';
                    echo 'Address:' . $user['full_address'] . '<br>';
                    //echo "Spent : 50,000 Taka <br>";
                    //echo 'Event Completed: 1 <br>';
                    //echo 'Rating: 0 <br>';
                    echo '<a href="edit-user.php?username=' . $user['username'] . '">Edit</a> ';
                    echo '<td><a onclick="return confirm(\'Are you sure you want to delete this user?\');" href="?username=' . $user['username'] . '&delete=yes&type=' . $user['type'] . '">Delete</a></td>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>


</body>

</html>