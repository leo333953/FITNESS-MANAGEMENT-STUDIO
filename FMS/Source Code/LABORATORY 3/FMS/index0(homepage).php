

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Management Studio </title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('ss.png');
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .logo {
            width: 500px;
            height: auto;
        }
        .logo-container {
            margin-bottom: 20px;
        }
        h1 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 50px;
            margin-bottom: 20px;
            text-align: center;
        }
        .tagline {
            display: flex;
            font-size: 20px;
            font-family: 'Merriweather', serif;
            color: #333;
            margin-top: 10px;
            animation: fadeIn 2s ease;
            justify-content: center;
            align-items: center;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
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
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="logo-container">
            <img src="logo.png" alt="Fitness Studio Logo" class="logo">
            <h1>STUDIO</h1>
            <p class="tagline">Train Hard. Stay Strong. Live Fit.</p>
            <div class="footer">
                <button type="button" onclick="window.location.href='index1(login).php'">
  &gt;
</button>
            </div>
        </div>
    </div>
</body>
</html>