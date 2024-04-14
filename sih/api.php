<?php
// Database connection details
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

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dumperid = $_POST['dumperid'];
    $status = $_POST['status'];
    $timestamp = $_POST['timestamp'];
    $location = $_POST['location'];
    $load_weight = $_POST['load_weight'];
    $battery_level = $_POST['battery_level'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO dumper_status (dumperid, status, timestamp, location, load_weight, battery_level) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssii", $dumperid, $status, $timestamp, $location, $load_weight, $battery_level);

    if ($stmt->execute()) {
        header("Location: dashboard.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>
