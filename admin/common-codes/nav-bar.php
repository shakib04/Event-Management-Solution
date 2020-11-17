<?php
session_start();

if ($_SESSION['username'] == null) {
    header("location: login.php");
}

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("location: login.php");
}
?>


<html>

<head>
    <title>Dasboard</title>
    <link rel="stylesheet" href="../css/reset.css">
    <style>
        .inter-linked-pages {
            background-color: #f1dac5;
            padding: 20px;
        }

        .inter-linked-pages a {
            padding: 15px;
            text-decoration: none;
            font-size: 20px;
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

        .log-out-button{
            background-color: red;
            padding: 2px;
            color: white;
            font-size: 20px;
        }
    </style>

</head>

<body>

    <form action="" method="post">
        <input type="submit" value="Log Out" class="log-out-button" name="logout">
    </form>

    <div class="inter-linked-pages">
        <a href="dashboard-admin.php">Dashboard</a>
        <a href="business-stats.php">My Business Data</a>
        <a href="new-registered.php">New Registered Users</a>
        <a href="client-users-list.php">List of Client Type User</a>
        <a href="event-planners-list.php">All Event Planners</a>
        <a href="my-profile.php">Profile</a>
    </div>

</body>

</html>

<?php

?>