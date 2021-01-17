<?php
require_once "../controllers/UserController.php";
require_once "../models/db_connection.php";

if (isset($_GET['service_name'])) {
    $suggestedService = searchPlanner($_GET['service_name']);
    if (count($suggestedService) > 0) {

        foreach ($suggestedService as $service) {

            echo "<div class='service-card'>";
            echo "Name: " . $service['service_name'] . "<br>";
            echo "Price: " . $service['price'] . "<br>";
            echo "Rating: " . $service['overall_rating'] . "<br>";
            echo 'By :  <a href="plannerprofile.php?username=' . $service['username'] . '">' . $service['username'] . '</a> . <br>';
            echo "</div>";
        }
    }
}
//book_event.php?username=joy004&service_id=1