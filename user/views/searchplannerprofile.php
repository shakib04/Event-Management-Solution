<?php
require_once "../controller/UserController.php";
require_once "../model/db_connection.php";

if (isset($_GET['service_name'])) {
    $planners = searchPlanner($_GET['service_name'], $_GET['type']);
    if (count($planners) > 0) {
       
        foreach ($planners as $planner) {
            
            
            echo '<div>';

            echo 'Service Name: <a href="plannerprofile.php?service_name=' . $planner['service_name'] . '">' . $planner['service_name'] . '</a> <br>';
            echo '</div>';
        }
    }
}
