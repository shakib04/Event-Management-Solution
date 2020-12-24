<?php

require_once "session-code.php";
require_once "../controller/UserController.php";
require_once "../model/database-conn.php";

$users = allUser();


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

        <form action="">
            <span id="type" style="visibility: hidden;">user</span>
            <input type="text" placeholder="Search Here" onkeyup="searchUser(this)" class="search-user">
            <input type="submit" value="Search" class="search-button">
        </form> <br>

        <script src="js/live-search.js"></script>


        <h2>All Clients [Order by Amount Spent]</h2>
        <div id="result">
            <?php
            if (count($users) > 0) {
                //echo "<pre>";
                //print_r($users);
                //echo "</pre>";
                foreach ($users as $user) {
                    echo '<div class="planner-card">';

                    echo 'Username: <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> <br>';
                    echo "Spent : 50,000 Taka <br>";
                    echo 'Event Completed: 1 <br>';
                    echo 'Rating: 0 <br>';
                    echo '<a href="">Edit</a> ';
                    echo '<a href="">Delete</a>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>

    <script>

    </script>
</body>

</html>