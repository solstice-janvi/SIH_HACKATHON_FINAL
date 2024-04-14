<?php

// Get username and password from POST
$username = $_POST['username'];  
$password = $_POST['password'];

// Connect to database
$conn = new mysqli("localhost","root","","test");


if($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// SQL query against registration table
$sql = "SELECT * FROM registration WHERE username = ? AND password = ?";

// Prepare statement  
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ss", $username, $password); 

// Execute query 
$stmt->execute();   

// Store result
$result = $stmt->get_result();

// Fetch data  
if($result->num_rows > 0) {
	header('Location: shovelid.php'); 

} else {
  echo "Invalid username or password!";   
}

?>