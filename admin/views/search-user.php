<?php
require_once "../controller/UserController.php";
require_once "../model/database-conn.php";
if (isset($_GET['name'])) {
    $users = searchUser($_GET['name'], $_GET['type']);
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
}
