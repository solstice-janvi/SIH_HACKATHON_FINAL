<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18 Blocks</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            height: 100%;
        }

        .block .box {
            padding: 35px 0 0 0;
            font-weight: lighter;
        }

        /* Styling for the container to cover the entire viewport */
        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* Creating 3 columns */
            gap: 10px; /* Gap between blocks */
            height: 100%; /* Covering the full height */
            padding: 20px; /* Providing padding for better visibility */
        }

        .block {
            background-color: #f0f0f0; /* Background color for blocks */
            border: 1px solid #ccc; /* Border for blocks */
            padding: 20px; /* Padding inside blocks */
            font-size: 24px;
            /* font-weight: bold; */
            text-align: center; /* Centering text */
        }

        .button-container {
            /* position: fixed; */
            bottom: 0;
            left: 0;
            width: 100%;
            /* background-color: #4caf50; */
            text-align: center;
            padding: 10px;
        }

        .button {
            background-color: #ff621a;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ff621a33;
        }
    </style>
</head>
<body>
    <h1>KEY MATRICS</h1>
    <div class="container" id="dataContainer"></div>
    <div class="button-container">
        <button class="button" onclick="loadData()">Load Data</button>
    </div>

    <script>
        function loadData() {
            // Simulate an AJAX request to get data from the server
            // In a real application, you would make an actual AJAX request to the server
            // and update the data based on the response

            // Assuming the server endpoint is 'get_data.php'
            var selectedDate = prompt("Enter the date (yyyy-mm-dd):");

            if (selectedDate) {
                fetch(`get_data.php?selected_date=${selectedDate}`)
                    .then(response => response.json())
                    .then(data => displayData(data));
            }
        }

        function displayData(data) {
            var container = document.getElementById('dataContainer');
            container.innerHTML = '';

            for (var i = 0; i < data.length; i++) {
                var block = document.createElement('div');
                block.className = 'block';

                var heading = document.createElement('div');
                heading.className = 'box';
                heading.textContent = data[i].heading;

                var value = document.createElement('div');
                value.className = 'box';
                value.textContent = data[i].value;

                block.appendChild(heading);
                block.appendChild(value);

                container.appendChild(block);
            }
        }
    </script>
</body>
</html>
