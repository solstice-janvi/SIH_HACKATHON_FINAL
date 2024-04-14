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

// Query to fetch data
$sql = "SELECT dumperid, status, timestamp, location, load_weight, battery_level FROM dumper_status";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table border='1'>";
    echo "<tr><th>Dumper ID</th><th>Status</th><th>Timestamp</th><th>Location</th><th>Load Weight</th><th>Battery Level</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["dumperid"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["timestamp"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["load_weight"] . "</td>";
        echo "<td>" . $row["battery_level"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


// Close connection
$conn->close();
?>
