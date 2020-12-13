<?php

$username = "root";
$password = "";
$serverName = "localhost";
$dbName = "web-tech-project-db";

$conn = mysqli_connect($serverName, $username, $password, $dbName) or die("Failed to connect with Database " . mysqli_connect_error());
