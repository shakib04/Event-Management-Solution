<?php
require_once "../controller/UserController.php";
require_once "../controller/PlannerController.php";
require_once "../model/database-conn.php";

if (isset($_GET['name'])) {
    $users = searchUser($_GET['name'], $_GET['type']);
    if (count($users) > 0) {
        //echo "<pre>";
        //print_r($users);
        //echo "</pre>";
        
        foreach ($users as $user) {
            $totalEarning = getTotalEarning($_GET['name']);
            echo "<pre>";
            print_r($totalEarning[0]);
            echo "</pre>";
            
            echo '<div class="planner-card">';

            echo 'Username: <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> <br>';
            echo 'Balance:' . $user['balance'] . '<br>';

            if (count($totalEarning) == 0) {
                echo "Total Earning: 0.00 Taka";
            } else {
                echo "Total Earning:" . $totalEarning['totalEarning'] . "Taka";
            }
            echo 'Event Completed: 1 <br>';
            echo 'Rating: 0 <br>';
            echo '<a href="edit-user.php?username=' . $user['username'] . '">Edit</a> ';
            echo '<a href="">Delete</a>';
            echo '</div>';
        }
    }
}
