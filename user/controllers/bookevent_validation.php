<?php

require_once "../models/db_connection.php";

//$price = "";
//$err_price = "";
$comment = "";
$err_comment = "";
$countValid = 0;

if (isset($_POST["Submit"])) {
	//Price VALIDATION
	// if(empty($_POST["price"])){
	// 	$err_price="Price Required";	
	// }
	// else{
	// 	$price = htmlspecialchars($_POST["price"]);
	// 	$countValid++;
	// }
	//Comment VALIDATION
	if (empty($_POST["comment"])) {
		$err_comment = "comment Required";
	} else {
		$comment = htmlspecialchars($_POST["comment"]);
		purchaseService($comment);

		//$countValid++;
	}
}

function purchaseService($comment)
{
	$price = getPriceOfService();
	echo $sql = "INSERT INTO `purchased_services_details` (`purchased_id`, `client_username`, `planner_username`, `service_id`, `status(paid/unpaid)`, `service_price`, `planner_approve`, `service_rating`, `planner_comment`) VALUES (NULL,'" . $_SESSION['username'] . "','" . $_GET['username'] . "' , '" . $_GET['service_id'] . "', 'unpaid', '$price', 'no', '', '$comment')";
	$data = execute($sql);
	if ($data) {
		echo "<h1>Success!!</h1>";
	}else{
		echo "<h1>Failed :(</h1>";
	}
}

function getPriceOfService()
{
	$sql = "SELECT price FROM `planner_services_list` WHERE service_id = '" . $_GET['service_id'] . "';";
	$data = getColumsValue($sql);
	return $data[0]['price'];
}
