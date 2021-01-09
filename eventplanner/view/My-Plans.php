<?php
require_once "session.php";
require_once "../controller/PlanController.php";

$data = getMyPlanList($_SESSION['username']);


?>
<style>
    .plan-list {
        border: 1px solid black;
        margin: 10px;
        padding: 15px;
    }

    .edit-btn {
        background-color: #34495e;
        color: white;
        padding: 5px;
    }
</style>

<?php
include_once "nav-bar.php";
?>

<div id="my-plans">

    <h2>My Plan List</h2>
    <a href="new-plan.php">Create A New Plan</a>
    <?php
    if (count($data) == 0) {
        echo "<h4> No Plans Added </h4>";
    } else {
        $count = 1;
        foreach ($data as $plan) {
            echo "<div class='plan-list'>";
            echo "<h3>" . $count++ . ". " . $plan['service_name'] . "</h3>";
            echo "<p>Category: " . $plan['cat_name'] . "</p>";
            echo "<p>Price: " . $plan['price'] . "</p>";
            echo "<p>Rating: " . $plan['overall_rating'] . "</p>";
            echo '<a class="btn edit-btn" href="edit-my-plan.php?serviceId=' . $plan['service_id'] . '">Edit</a>';
            echo "</div>";
        }
    }
    ?>
</div>