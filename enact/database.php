<?php

$servername = "localhost";
$username = "root"; // Change this if your database has a different username
$password = ""; // Change this if your database has a password
$dbname = "enactus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($conn){
    echo"you are connected";
}

?>
