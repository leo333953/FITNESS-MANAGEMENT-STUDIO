
<?php





?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fitness Studio</title>
  <link rel="stylesheet" href="jilah.css"/>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      display: flex;
      height: 100vh;
    }

    .left-panel, .right-panel {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .left-panel {
      background-image: url('ss.png');
      background-size: 1000px 750px;
    }

    .right-panel {
      background-image: url('ss2.png');
      background-size: 1000px 750px;
      text-align: center;
    }

    .logo {
      width: 500px;
      margin-bottom: 5px;
    }

    .logos {
      width: 200px;
      margin-bottom: 5px;
    }

    h1 {
      margin: 0;
      font-size: 2.5em;
    }

    .location {
      font-size: 1.2em;
      margin-bottom: 10px;
    }

    .button-group button {
      width: 400px;
      padding: 20px;
      margin: 10px 0;
      font-size: 16px;
      background-color: whitesmoke;
      border: none;
      cursor: pointer;
      transition: 0.3s;
      border-radius: 4px;
    }

    .button-group button:hover {
      background-color: #c0c0c0;
    }

    .right-panel h1 {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 30px;
    }

    .right-panel h2 {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 25px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="left-panel">
      <img src="logo.png" alt="Fitness Image" class="logo">
      <h1>STUDIO</h1>
    </div>

    <div class="right-panel">
      <h1>Ramon Magsaysay Memorial Colleges</h1>
      <h2>General Santos City</h2>
      <br>
      <img src="high_quality_logo.png" alt="school-logo" class="logos">
      <br>
      <div class="button-group">
        <a href="index4(student).php"><button onclick="handleClick('Student Athlete')">Student Athlete</button></a>
        <a href="index5(teachers).php"><button onclick="handleClick('Teachers / Instructors')">Teachers / Instructors</button></a>
        <a href="index6(staff).php"><button onclick="handleClick('Staff / Others')">Staff / Others</button></a>
      </div>
    </div>
  </div>

</body>
</html>
