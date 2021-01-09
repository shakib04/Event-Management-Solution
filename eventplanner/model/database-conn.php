<?php
$db_username = "root";
$db_password = "";
$db_name = "web-tech-project-db";
$server = "localhost";

$conn = mysqli_connect($server, $db_username, $db_password, $db_name) or die("Connection Problem: " . mysqli_connect_error());

function operation($sql)
{
    global $conn;
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

$sql = "update `all_registered_users` set `Full_Name`='Maria' where username = 'maria'";
operation($sql);
