<?php
// Default values when the form is not submitted
$selectedDate = '';
$values = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming your Excel file is named 'data.xlsx'
    $excelFilePath = 'books2.xlsx';

    // Get the selected date from the form
    $selectedDate = $_POST['selected_date'];

    // Load PhpSpreadsheet library
    require 'vendor/autoload.php';

    // Create a new Spreadsheet object
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($excelFilePath);

    // Get the data from 'Sheet1'
    $sheet = $spreadsheet->getSheetByName('sheet1');

    // Find the row with the selected date
    $row = $sheet->getRowIterator()->current();
    while ($row !== null && $row->getCell('Date')->getValue() != $selectedDate) {
        $row = $sheet->getRowIterator()->next();
    }

    if ($row !== null) {
        // Retrieve values for the corresponding 11 boxes
        for ($i = 1; $i <= 11; $i++) {
            $cellValue = $row->getCell("Value$i")->getValue();
            $values["value$i"] = $cellValue;
        }
    } else {
        // Handle the case when the date is not found
        $values = [];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Loader</title>
    <style>
        /* Include your CSS styles here */
    </style>
</head>
<body>
    <h1>Data Loader</h1>
    <form id="dataForm" method="post">
        <label for="selected_date">Select Date:</label>
        <input type="date" id="selected_date" name="selected_date" required>
        <button type="submit">Load Data</button>
    </form>

    <?php
    // Display 11 boxes with updated values
    for ($i = 1; $i <= 11; $i++) {
        echo "<div class='block'>
                Value $i for $selectedDate:
                <div class='box' id='box_$i'>" . ($values ? $values["value$i"] : 'Data not found') . "</div>
            </div>";
    }
    ?>
</body>
</html>
