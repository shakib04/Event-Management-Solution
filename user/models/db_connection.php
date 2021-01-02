<?php
$user = "root";
$pass = "";
$serverName = "localhost";
$dbName = "web-tech-project-db";

$conn = mysqli_connect($serverName, $user, $pass, $dbName) or die("Failed to connect with Database " . mysqli_connect_error());


function execute($query)
{
    global $serverName, $user, $pass, $dbName;
    $conn = mysqli_connect($serverName, $user, $pass, $dbName) or die("Failed to connect with Database " . mysqli_connect_error());
    $result = mysqli_query($conn, $query);
    //mysqli_close($conn);
    return $result;
}

function getColumsValue($query)
{
    global $serverName, $user, $pass, $dbName;
    $conn = mysqli_connect($serverName, $user, $pass, $dbName) or die("Failed to connect with Database " . mysqli_connect_error());
    $result = mysqli_query($conn, $query);
    $data = array();
    if ($result == true && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }

    return $data;
}

?>