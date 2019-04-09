<?php
$servername = "sample-database";
$username = "csci459";
$password = "csci459";
$dbname = "459db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
