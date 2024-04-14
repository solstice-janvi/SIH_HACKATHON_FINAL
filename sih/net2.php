<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>18 Blocks</title>
  <!-- <link rel="stylesheet" href="styles2.css"> -->
  <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  html, body {
    height: 100%;
  }
    .block .box{
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
        

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            border: 2px solid #2980b9;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            color: #fff;
        }

        .nav-toggle-btn {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 24px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav-toggle-btn:hover {
            background-color: #2980b9;
            color: #fff;
        }
    </style>
  
  </style>
</head>
<body>
    <h1>KEY MATRICS</h1>
  <div class="container">
   
    
    <div class="block">Average truck payload
        <div class="box">282.5</div>
    </div>
    <div class="block">cumulative productive payload
        <div class="box">233692.4t</div>
    </div>
    <div class="block">Total idle time
        <div class="box">2d 12h 14m</div>
    </div>
    <div class="block">No. of truck loads
        <div class="box">828</div>
    </div>
    <div class="block">Total tonnes
        <div class="box">243141.8t</div>
     </div>
    <div class="block">Total shovel cycle
        <div class="box">3864.0</div>
    </div>
    <div class="block">Average truck loading time
        <div class="box">7m</div>
    </div>
    <div class="block">commulative unproductive payload
        <div class="box">9449.4t</div>
    </div>
    <div class="block">instantaneous load rate
        <div class="box">19882.2t/hr</div>
    </div>
    <div class="block">Total cycle time
        <div class="box">4d 21h 32m</div>
    </div>
    <div class="block">Average swing angle
        <div class="box">100</div>
    </div>
    <div class="block">cycle per cycling hour
        <div class="box">32.87</div>
    </div>
    <div class="block">Average swing cycle
        <div class="box">188.85</div>
    </div>
    <div class="block">Average productive payload
        <div class="box">63.9t</div>
    </div>
    <div class="block">cummulative waste payload
        <div class="box">9449.4t</div>
    </div>
    <div class="block">no. of trucks in circuit
        <div class="box">6</div>
    </div>
    <div class="block">tonnes per cycling hour
        <div class="box">2068.6</div>
    </div>
    <div class="block">tonnes per operating hour 
        <div class="box">7d 9h 46m</div>
    </div>
    
   

    <a href="image.php" class="btn btn-primary">dashboard</a>

<!-- <button class="nav-toggle-btn" aria-label="menu" data-nav-toggler> -->
  <!-- <ion-icon name="menu-outline" aria-hidden="true"></ion-icon> -->
</button>
    
  </div>
  
</body>
</html>