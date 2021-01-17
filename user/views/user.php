<?php

require_once "session-code.php";
require_once "../controllers/HomepageController.php";

$suggestedService = getSuggestedServices();
?>

<html>

<head>

    <title>USER</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/mystyles.css">  -->
    <style>
        .search-planner {
            width: 70%;
            padding: 5px;
        }

        .search-button {
            padding: 5px;
            cursor: pointer;
        }

        .service-card{
            background-color: aliceblue;
            margin: 5px;
            line-height: 1.5;
            border: 1px solid darkblue;
        }
    </style>
</head>

<body>

    <form action="" method="post">
        <input type="submit" value="Log Out,<?php echo $_SESSION['username']; ?>" class="log-out-button" name="logout">
    </form>

    <div class="layout grid-cont">

        <div class="navigation grid-item">
            <a href="user.php">Home</a>
            <a href="Event.php">Event set design </a>
            <a href="myorder.php">Order </a>
            <a href="our_clients.php">Our clients </a>
            <a href="services_we_provide.php">services we provide </a>
            <a href="myprofile.php">My Profile</a>


        </div>
        <form action="">
            <input type="text" placeholder="What are you looking for?" onkeyup="searchPlanner(this)" class="search-planner">
            <input type="submit" value="Search" class="search-button">
        </form> <br>
        <div id="result">
            <?php
            foreach ($suggestedService as $service) {
                
                echo "<div class='service-card'>";
                echo "Name: " . $service['service_name'] . "<br>";
                echo "Price: " . $service['price'] . "<br>";
                echo "Rating: " . $service['overall_rating'] . "<br>";
                echo 'By :  <a href="plannerprofile.php?username=' . $service['username'] . '">' . $service['username'] . '</a> . <br>';
                echo "</div>";
            }
            ?>
        </div>


        <!-- Photo Grid -->
        <div class="row">
            <div class="column">
                <!-- <img src="images/web1.jpg" style="width:100%"> -->

            </div>

            <script src="../scripts/search.js"></script>

</body>

</html>