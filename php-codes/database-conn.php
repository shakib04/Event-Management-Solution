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


function preparedExecute($query, $placeholders, $data1)
{
    global $serverName, $username, $password, $dbName;
    $conn = mysqli_connect($serverName, $username, $password, $dbName) or die("Failed to connect with Database " . mysqli_connect_error());

    //create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    //prepare the prepared statement
    if (!mysqli_stmt_prepare($stmt, $query)) {
        echo "SQL Statement Failed";
    } else {
        //bind parameter to the placeholder
        mysqli_stmt_bind_param($stmt, $placeholders, $data1);
    }

    //run params inside database
    mysqli_stmt_execute($stmt);
}
