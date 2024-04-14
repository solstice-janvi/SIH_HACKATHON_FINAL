<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dumper Status Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="container">
    <h1>Enter Dumper Status</h1>
    <form action="api.php" method="post">
        <label for="dumperid">Dumper ID:</label>
        <input type="text" id="dumperid" name="dumperid"><br><br>

        <label for="status">Status:</label>
        <input type="text" id="status" name="status"><br><br>

        <label for="timestamp">Timestamp:</label>
        <input type="datetime-local" id="timestamp" name="timestamp"><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location"><br><br>

        <label for="load_weight">Load Weight:</label>
        <input type="number" id="load_weight" name="load_weight"><br><br>

        <label for="battery_level">Battery Level:</label>
        <input type="number" id="battery_level" name="battery_level"><br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
</body>
</html>
