<?php
require_once "session-code.php";

require_once "../controller/ServicesController.php";

echo "<pre>";
//print_r(allServicesList());
echo "</pre>";
$allServices = allServicesList();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <style>
        .active-add-new-employee {
            background-color: aliceblue;
        }

        form.add-employee {
            width: 1000px;
            margin: 20px auto;
        }

        .add-employee input {}

        td,th {
            padding: 20px;
        }

        input {
            padding: 3px;
        }

        .services-table{
            width: 1000px;
            margin-top: 30px;
        }

        .services-table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php include_once "nav-bar.php" ?>
    <h2 style="margin-top: 50px; ">All Services List [Added By Planner]</h2>
    <table class="services-table">
        <tr>
            <th>Service ID</th>
            <th>Service Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Created By</th>
            <th>Rating</th>
        </tr>
        <?php
        foreach ($allServices as $service) {
            echo "<tr>";
            echo "<td>" . $service['service_id'] . "</td>";
            echo "<td>" . $service['service_name'] . "</td>";
            echo "<td>" . $service['cat_name'] . "</td>";
            echo "<td>" . $service['price'] . "</td>";
            echo "<td>" . $service['username'] . "</td>";
            echo "<td>" . $service['overall_rating'] . "</td>";
            echo "</tr>";
        }

        ?>


    </table>

</body>

</html>