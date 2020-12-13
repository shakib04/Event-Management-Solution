<?php

require_once "session-code.php";


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

        .active-event-planner-list {
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <?php include_once "nav-bar.php" ?>

    <div class="all-event-planner">
        <?php include_once "search-option.php" ?>
        <h2>Event Planners</h2>
        <div class="planner-card">
            
            Username: <a href="">shakib001</a> <br>
            Earned : 150,000 Taka <br>
            Event Completed: 10 <br>
            Rating: 4.5 <br>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </div>
        <div class="planner-card">
            
            Username: <a href="">shakib001</a> <br>
            Earned : 150,000 Taka <br>
            Event Completed: 10 <br>
            Rating: 4.5<br>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </div>
        <div class="planner-card">
            
            Username: <a href="">shakib001</a> <br>
            Earned : 150,000 Taka <br>
            Event Completed: 10 <br>
            Rating: 4.5 <br>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </div>
        <div class="planner-card">
            
            Username: <a href="">shakib001</a> <br>
            Earned : 150,000 Taka <br>
            Event Completed: 10 <br>
            Rating: 4.5 <br>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </div>
    </div>
</body>

</html>