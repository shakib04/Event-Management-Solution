<html>

<head>
    <title>Dasboard</title>
    <link rel="stylesheet" href="css/reset.css">
    <style>
        .inter-linked-pages {
            background-color: #f1dac5;
            padding: 20px;
        }

        .inter-linked-pages a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
            color: black;
            transition: 0.7s;
        }

        a:visited {
            color: blue;
        }

        input[type=submit] {
            cursor: pointer;
        }

        .log-out-button {
            background-color: red;
            padding: 2px;
            color: white;
            font-size: 20px;
        }
    </style>

</head>

<body>

    <form action="" method="post">
        <input type="submit" value="Log Out, <?php echo $_SESSION['username']; ?>" class="log-out-button" name="logout">
    </form>

    <div class="inter-linked-pages">
        <a href="dashboard-admin.php" class="active-dashboard">Dashboard</a>
        <a href="business-stats.php" class="active-my-business">My Business Data</a>
        <a href="new-registered.php" class="active-new-reg">New Registered Users</a>
        <a href="client-users-list.php" class="active-client">List of Client Type User</a>
        <a href="event-planners-list.php" class="active-event-planner-list">All Event Planners</a>
        <a href="service-list.php" class="active-add-new-employee">Service List</a>
        <a href="profile.php" class="active-my-profile">Profile</a>
    </div>

</body>

</html>

<?php

?>