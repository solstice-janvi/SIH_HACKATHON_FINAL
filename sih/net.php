<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centered Boxes Website</title>
  <style>
   body {
    background-color: #ff621a33;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      /* background-color: #f0f0f0; */
    }

    .container {
      display: flex;
      flex-wrap: wrap;

    }

    .box-container {
      position: relative;
      width: 200px;
      background-color: #f0f0f0;
      height: 300px;
      width: 300px;
      margin: 10px;
    }

    .box {
      width: 100%;
      height: 100%;
      text-align: center;
      line-height: 100px;
      font-family: Arial, sans-serif;
      cursor: pointer;
      transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-size: cover;
      background-position: center;
      position: absolute;
      top: 0;
      left: 0;
    }

    .heading {
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: #ff621a;
      color: #fff;
      padding: 5px;
      box-sizing: border-box;
    }

    .box1 {
      background-image: url('MONITORING.gif'); /* Add the path to your image */
    }

    .box2 {
      background-image: url('tech&for.gif'); /* Add the path to your image */
    }

    .box3 {
      background-image: url('tech.gif'); /* Add the path to your image */
    }

    .box4 {
      background-image: url('workstation.gif'); /* Add the path to your image */
    }

    .box:hover {
      /* background-color: #2980b9; */
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

<div class="container">
  <div class="box-container">
    <div class="box box1"></div>
    <div class="heading">payload dashboard</div>
  </div>

  <div class="box-container">
    <div class="box box2"></div>
    <div class="heading">key metrics</div>
  </div>

  <div class="box-container">
    <div class="box box3"></div>
    <div class="heading">technology and formula</div>
  </div>

  <div class="box-container">
    <div class="box box4"></div>
    <div class="heading">workstation</div>
  </div>
</div>

</body>
</html>
