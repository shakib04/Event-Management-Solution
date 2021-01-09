<?php
$db_username = "root";
$db_password = "";
$db_name = "web-tech-project-db";
$server = "localhost";

$conn = mysqli_connect($server, $db_username, $db_password, $db_name) or die("Connection Problem: " . mysqli_connect_error());

function execute($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function getColumsValue($sql)
{
    global $conn;
    $data = [];
    $result = mysqli_query($conn, $sql);
    
    //if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    //}

    return $data;
    
}


// $result = getColumsValue("select * from  `all_registered_users`;");
// echo "<pre>";
// print_r($result);
// echo "</pre>";

//$sql = "update `all_registered_users` set `Full_Name`='Maria' where username = 'maria'";
//operation($sql);
