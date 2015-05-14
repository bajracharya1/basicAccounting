<?php


function db_connect(){

$servername = "localhost";
$username = "prakash";
$password = "prakash";
$db = "prakash";

// Create connection
$conn = new mysqli($servername, $username, $password,  $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


return $conn;

}

function db_close($conn){

  mysqli_close($conn);

}
