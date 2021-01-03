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


            echo '<div class="planner-card">';

            echo 'Username: <a href="user-details.php?username=' . $user['username'] . '">' . $user['username'] . '</a> <br>';
            echo 'Full Name:' . $user['Full_Name'] . '<br>';
            echo 'Balance:' . $user['balance'] . '<br>';
            echo 'Email:' . $user['email'] . '<br>';
            echo 'Phone Number:' . $user['phone_number'] . '<br>';
            echo 'Address:' . $user['full_address'] . '<br>';

            // if (count($totalEarning) == 0) {
            //     echo "Total Earning: 0.00 Taka";
            // } else {
            //     echo "Total Earning:" . $totalEarning['totalEarning'] . "Taka";
            // }
            //echo 'Event Completed: 1 <br>';
            //echo 'Rating: 0 <br>';
            echo '<a href="edit-user.php?username=' . $user['username'] . '">Edit</a> ';
            echo '<td><a onclick="return confirm(\'Are you sure you want to delete this user?\');" href="?username=' . $user['username'] . '&delete=yes&type=' . $user['type'] . '">Delete</a></td>';
            echo '</div>';
        }
    }
}
