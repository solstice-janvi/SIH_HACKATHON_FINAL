<?php
$servername = "localhost";
$username = "janvi";
$password = "janvi2978";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming $selected_date is received from user input or some other source
$selected_date = "2023-01-15"; // Replace this with your actual date

$sql = "SELECT * FROM date WHERE selected_date = ? ";

// Prepare statement  
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("s", $selected_date); 

// Execute query 
$stmt->execute();   

// Store result
$result = $stmt->get_result();

// Fetch data  
if ($result->num_rows > 0) {
    header('Location: net.php'); 
} else {
    echo "Invalid day";   
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
