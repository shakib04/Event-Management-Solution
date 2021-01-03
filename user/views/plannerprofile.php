  
 <?php
    require_once "session-code.php";
    require_once "../controllers/UserController.php";
    $columns = getUserDetails($_SESSION['username']);
    require_once "../controllers/php_codes/plannerprofile_validation.php";
    $planner=profileDetails($_GET['username']);
    $type = $planner[0]['type'];
    ?>



<html>
    <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile</title>
		<style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
			text-align: center;
        }

        tr:nth-child(odd) {
            background-color: aliceblue;
        }

        tr:nth-last-child(even) {
            background-color: whitesmoke;
        }

		table.center {
            margin-left: auto; 
            margin-right:  auto;
}
        body {text-align:center;}
		
    </style>
		   
    </head>
    <body style="text-align:center;">
    <?php include "mypagehead.php";?>
	 
		 <div>
        <h2>Planner Details: <?php echo $planner[0]['username']?></h2>
		
            <table class="center">
                 <tr>
                 <td>Username:</td>
                 <td>
                    <?php echo $planner[0]['username']?>
                 </td>
                 </tr>
            <tr>
                <td>Full Name:</td>
                <td>
                   <?php echo $planner[0]['Full_Name']?>
                </td>
                 
            </tr>

            <tr>
                <td>Phone Number:</td>
                 <td>
                     <?php echo $planner[0]['phone_number']?>
                </td>
               
            </tr>

            <tr>
                <td>Address</td>
                 <td>
                     <?php echo $planner[0]['full_address']?>
                 </td>
                
            </tr>
        </div>
			

        </table>
        
<?php
if ($type == "planner") {
    $data = plannerServices($_GET['username']);
    echo "<h2>Planner Services:</h2>";
    echo "<div>";
    if (count($data) == 0) {
        echo "<h3>No Services Added by Planner</h3>";
    } else {
        foreach ($data as $service) {
            echo "<div style='border: 5px solid black; padding: 20px; width: 500px; margin: 10px; line-height: 1.7;'>";
            echo "Service Name: " . $service['service_name'] . "<br>";
            echo "Service Id: " . $service['service_id'] . "<br>";
            echo "Category: " . $service['cat_name'] . "<br>";
            echo "Price: " . $service['price'] . "<br>";
            echo  '<a href="book_event.php?username='.$_GET['username'].'&service_id='. $service['service_id'] .'.php">Order</a>';
            echo "</div>";
        }
    }
    echo "</div>";
}
?>
			 
 
	</body>
</html>