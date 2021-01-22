<?php
require_once "session.php";

require_once "../controller/OrdersController.php";

//nav bar
include_once("nav-bar.php");
?>

<style>
    .order-list {
        border: 1px solid black;
        margin: 5px;
        padding: 10px;
        line-height: 1.5;
    }

    .btn {
        padding: 5px;
        color: white;
        margin: 5px;
    }

    .green-btn {
        background-color: green;
    }

    .red-btn {
        background-color: red;
    }
</style>

<div id="unapprove-order-list">
    <?php
    $unapprovedOrders = getRequestedUnpaOrder();
    echo "<h1>Order Requests</h1>";
    if (count($unapprovedOrders) == 0) {
        echo "<h3>No Requested Order Found</h3>";
    } else {
        foreach ($unapprovedOrders as $order) {
            echo "<div class='order order-list'>";
            echo "Service Name: " . $order['service_name'] . "<br>";
            echo "Requested By: " . $order['client_username'] . "<br>";
            echo "Price: " . $order['price'] . "<br>";
            echo "Payment Status: " . $order['status(paid/unpaid)'] . "<br>";
            echo "Your Approve: " . $order['planner_approve'] . "<br>";
            echo "Order Time: 7 Day" . "<br>";
            echo '<a class="btn green-btn" href="?approve_order=yes&purchased_id=' . $order['purchased_id'] . '">Approve</a> <a class="btn red-btn" href="">Delete</a>';
            echo "</div>";
        }
    }
    ?>
</div>

<div id="active-order">
    <?php

    $approvedOrders = getApprovedOrderList();
    echo "<h1>My Orders</h1>";
    if (count($approvedOrders) == 0) {
        echo "<h2>No Active Orders</h2>";
    } else {
        foreach ($approvedOrders as $order) {
            echo "<div class='order order-list'>";
            echo "Service Name: " . $order['service_name'] . "<br>";
            echo "Requested By: " . $order['client_username'] . "<br>";
            echo "Price: " . $order['price'] . "<br>";
            echo "Payment Status: " . $order['status(paid/unpaid)'] . "<br>";
            echo "Your Approve: " . $order['planner_approve'] . "<br>";
            echo "Target Date: 20/02/2021 (2 Days Remaining)" . "<br>";
            echo '<a class="btn green-btn" href="?complete_order=yes&purchased_id=' . $order['purchased_id'] . '">Complete</a> <a class="btn red-btn" href="">Cancel</a>';
            echo "</div>";
        }
    }
    ?>
</div>