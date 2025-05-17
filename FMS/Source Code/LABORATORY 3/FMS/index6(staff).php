<?php





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Studio - Staff / Others Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url('ss2.png');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            gap: 50px;
            padding: 20px;
            border: none;
            border-radius: 8px;
        }
        .left {
            text-align: center;
            color: black;
        }
        .left img {
            width: 500px;
            margin-bottom: 10px;
        }
        .left h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            margin: 0;
        }
        .right {
            color: white;
        }
        .right h2 {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }
        input {
            padding: 20px;
            width: 300px;
            border: none;
            border-radius: 4px;
            background-color: #ddd;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
        }
        .footer button {
            padding: 12px 30px;
            font-size: 16px;
            background-color: whitesmoke;
            border: none;
            border-radius: 8px;
            color: black;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .footer button:hover {
            background-color: #ccc;
        }
    </style>
</head>
<body>



<div class="container">
    <div class="left">
        <img src="logo.png" alt="logo">
        <h1>STUDIO <br></h1>
    </div>

    <div class="right">
        <h2>Staffs / Others</h2>
        <form class="login-form" action="index1.6.html" method="POST">
            <div class="form-group">
                <input type="text" placeholder="Family Name" name="familyName" required>
                <input type="text" placeholder="Phone Number" name="phoneNumber" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Given Name" name="givenName" required>
                <input type="text" placeholder="Position Type" name="positionType" required>
            </div>

            <div class="form-group">
                <input type="text" placeholder="Middle Initial" name="middleInitial" required>
            </div>

            <div class="form-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>

            <div class="footer">
                <button type="submit">Confirm</button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
