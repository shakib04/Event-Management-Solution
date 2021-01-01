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
            echo 'Full Name:' . $user['Full_Name'] . '<br>';
            echo 'Balance:' . $user['balance'] . '<br>';
            echo 'Email:' . $user['email'] . '<br>';
            echo 'Phone Number:' . $user['phone_number'] . '<br>';
            echo 'Address:' . $user['full_address'] . '<br>';
            echo '<a href="edit-user.php?username=' . $user['username'] . '">Edit</a> ';
            echo '<a href="">Delete</a>';
            echo '</div>';
        }
    }
}
