<?php
require_once "session.php";

require_once "../controller/OrdersController.php";

//nav bar
include_once("nav-bar.php");
?>

<style>
    .order-list{
        border: 1px solid black;
        margin: 5px;
        padding: 10px;
        line-height: 1.5;
    }

    .btn{
        padding: 5px;
        color: white;
        margin: 5px;
    }
    .green-btn{
        background-color: green;
    }

    .red-btn{
        background-color: red;
    }
</style>

<div id="unapprove-order-list">
    <?php
    $unapprovedOrders = getRequestedUnpaOrder();
    echo "<h1>Requested Order</h1>";
    if (count($unapprovedOrders) ==0) {
     echo "<h1>No Requested Order Found</h1>";
    }else{
        foreach ($unapprovedOrders as $order) {
            echo "<div class='order order-list'>";
            echo "Service Name: " . $order['service_name'] . "<br>";
            echo "Requested By: " . $order['client_username'] . "<br>";
            echo "Price: " . $order['price'] . "<br>";
            echo "Payment Status: " . $order['status(paid/unpaid)'] . "<br>";
            echo "Your Approve: " . $order['planner_approve'] . "<br>";
            echo '<a class="btn green-btn" href="">Approve</a> <a class="btn red-btn" href="">Delete</a>';
            echo "</div>";
        }
    }
    ?>
</div>