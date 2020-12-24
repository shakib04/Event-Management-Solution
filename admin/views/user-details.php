<?php

require_once "session-code.php";
require_once "../controller/UserController.php";
require_once "../controller/PlannerController.php";

if (!isset($_GET['username'])) {
    //header("location:dashboard-admin.php");
    echo "<h1>Username is Missing</h1>";
    die();
}

$userData = getUserDetails($_GET['username']);

if (count($userData) == 0) {
    echo "<h1>User Not Found</h1>";
    die();
}

echo $type = $userData[0]['type'];

if ($type == "planner") {
    $plannerServiceData = plannerServices($_GET['username']);
}

?>


<?php

?>
<?php
//require_once "nav-bar.php";
?>
<div>
    <table>
        <tr>
            <td>Full Name</td>
            <td><?php echo $userData[0]['Full_Name']; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $userData[0]['gender']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $userData[0]['email']; ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?php echo $userData[0]['phone_number']; ?></td>
        </tr>
        <tr>
            <td>Full Address</td>
            <td><?php echo $userData[0]['full_address']; ?></td>
        </tr>
        <tr>
            <td>Balance</td>
            <td><?php echo $userData[0]['balance']; ?></td>
        </tr>
        <tr>
            <td>registration date</td>
            <td><?php echo $userData[0]['registration_date']; ?></td>
        </tr>
        <tr>
            <td>Approved </td>
            <td><?php echo $userData[0]['approved']; ?></td>
        </tr>
    </table>
</div>


<?php
if ($type == "planner") {
    echo "<h2>Planner Services List</h2>";
    echo "<div>";
    if (count($plannerServiceData) == 0) {
        echo "<h3>No Services Added by Planner</h3>";
    } else {
        foreach ($plannerServiceData as $service) {
            echo "<div style='border: 1px solid black; padding: 10px; width: 600px; margin: 10px; line-height: 1.7;'>";
            echo "Service Name: " . $service['service_name'] . "<br>";
            echo "Category: " . $service['cat_name'] . "<br>";
            echo "Price: " . $service['price'] . "<br>";
            echo "Overall Rating: " . $service['overall_rating'] . "<br>";
            if ($service['status(hide/show)'] == 'hide') {
                echo "Service Status: Inactive" . "<br>";
            } elseif ($service['status(hide/show)'] == 'show') {
                echo "Service Status: Active" . "<br>";
            }
            echo "</div>";
        }
    }
    echo "</div>";
}
?>