<?php
$servername = "localhost";
$username = "janvi";
$password = "janvi2978";
$dbname = "dumpers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
header("Location: api2.php");
?>