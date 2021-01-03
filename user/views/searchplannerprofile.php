<?php
require_once "../controllers/UserController.php";
require_once "../models/db_connection.php";

if (isset($_GET['service_name'])) {
    $planners = searchPlanner($_GET['service_name']);
    if (count($planners) > 0) {
       
        foreach ($planners as $planner) {
            
            
            echo '<div>';

            echo 'Service Name:'.$planner['service_name'].'<br> <a href="plannerprofile.php?username=' . $planner['username'] . '">' . $planner['username'] . '</a> <br><br>';
            echo '</div>';
            
        }
    }
}
//book_event.php?username=joy004&service_id=1