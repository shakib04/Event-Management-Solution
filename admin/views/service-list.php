<?php
require_once "session-code.php";

require_once "../controller/ServicesController.php";

echo "<pre>";
//print_r(allServicesList());
echo "</pre>";
$allServices = allServicesList();
$myjson = json_encode($allServices);

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

        td,
        th {
            padding: 20px;
        }

        input {
            padding: 3px;
        }

        .services-table {
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
    <div id="result"></div>
    <!-- <table class="services-table">
        <tr>
            <th>Service ID</th>
            <th>Service Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Created By</th>
            <th>Rating</th>
        </tr> -->
        <?php
        // foreach ($allServices as $service) {
        //     echo "<tr>";
        //     echo "<td>" . $service['service_id'] . "</td>";
        //     echo "<td>" . $service['service_name'] . "</td>";
        //     echo "<td>" . $service['cat_name'] . "</td>";
        //     echo "<td>" . $service['price'] . "</td>";
        //     echo "<td>" . $service['username'] . "</td>";
        //     echo "<td>" . $service['overall_rating'] . "</td>";
        //     echo "</tr>";
        // }

        ?>


    <!-- </table> -->

    <script>
        var tabledata = "<table class='services-table'><tr><th>Service ID</th><th>Service Name</th><th>Category</th><th>Price</th><th>Created By</th><th>Rating</th></tr>";
        var obj = JSON.parse('<?php echo $myjson; ?>');
        console.log(obj);
        var len = <?php echo count($allServices); ?>;
        for (let index = 0; index < len; index++) {
            tabledata += "<tr>";
            tabledata += "<td>" + obj[index]['service_id'] + "</td>"
            tabledata += "<td>" + obj[index].service_name + "</td>";
            tabledata += "<td>" + obj[index]['cat_name'] + "</td>";
            tabledata += "<td>" + obj[index]['price'] + "</td>";
            tabledata += "<td>" + obj[index]['username'] + "</td>";
            tabledata += "<td>" + obj[index]['overall_rating'] + "</td>";
            tabledata += "</tr>";
        }
        tabledata += "</table>";
        document.getElementById("result").innerHTML = tabledata;
    </script>
</body>

</html>