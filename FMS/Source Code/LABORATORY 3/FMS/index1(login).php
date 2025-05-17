<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$users = [
    'admin' => ['password' => 'password123', 'role' => 'admin'],
    'user'  => ['password' => 'userpass', 'role' => 'user']
];

$success = null;
$error = null;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error = "Invalid username or password...";
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($users[$username]) && $users[$username]['password'] === $password) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $users[$username]['role'];

if ($users[$username]['role'] === 'user') {
    $success = "Login successful! Redirecting...";
    echo "<meta http-equiv='refresh' content='2;url=index7(userdashboard).php'>";
    echo "<script>setTimeout(function(){ window.location.href='index7(userdashboard).php'; }, 2000);</script>";
} else {
    $success = "Login successful! Redirecting...";
    echo "<meta http-equiv='refresh' content='2;url=index8(admindashboard).php'>";
    echo "<script>setTimeout(function(){ window.location.href='index8(admindashboard).php'; }, 2000);</script>";
}
        } else {
            $error = "Invalid username or password.";
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
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
      text-align: left;
    }
    .login-form {
      width: 100%;
      max-width: 350px;
    }
    .login-form label {
      font-size: 14px;
      margin-top: 10px;
      display: block;
      color: black;
    }
    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 15px;
      margin-top: 5px;
      background: #d9d9d9;
      border: none;
      font-size: 20px;
    }
    .options {
      display: flex;
      align-items: center;
      margin: 5px 0 10px;
    }
    .options input[type="checkbox"] {
      margin-right: 8px;
    }
    .login-button-container {
      display: flex;
      justify-content: flex-end;
      padding-top: 10px;
    }
    .login-form button {
      padding: 10px 20px;
      background-color: white;
      border: none;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
    }
    .login-form button:hover {
      background-color: #f0f0f0;
    }
    .links {
      margin-top: 10px;
      text-align: left;
    }
    .links a {
      font-size: 14px;
      color: #d3e5f9;
      text-decoration: underline;
      display: block;
      margin-top: 5px;
    }
    .logo {
      width: 500px;
      margin-bottom: 5px;
    }
    .logos {
      width: 200px;
      margin-bottom: 5px;
    }
    h1, h2 {
      font-family: 'Lucida Sans', 'Lucida Grande', sans-serif;
      color: #000;
    }
    h1 {
      font-size: 30px;
    }
    h2 {
      font-size: 25px;
    }
    .error {
      color: red;
      font-weight: bold;
      text-align: center;
      margin-top: 10px;

    }

  .success {
  color: green;
  font-weight: bold;
  text-align: center;
  margin-top: 10px;
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

      <img src="high_quality_logo.png" alt="school-logo" class="logos">

      <?php
    if ($success) echo "<p class='success'>$success</p>";
    if ($error) echo "<p class='error'>$error</p>";
  ?>

<form class="login-form" method="POST">
    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    
    <label for="username">Username/Email</label>
    <input type="text" id="username" name="username" required>


        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
<span style="display:inline-flex;align-items:center;margin-left:5px;">
  <input type="checkbox" id="show-password" style="margin-left:10px;"/>
  <label for="show-password" style="margin-left:5px; font-size:13px; cursor:pointer;">Show Password</label>
</span>

        <div class="login-button-container">
          <button type="submit">Login</button>
        </div>

        <div class="links">
          <a href="#">Forget Password</a>
          <a href="index3(register).php">Register</a>
        </div>
      </form>
      
<script>
document.getElementById('show-password').addEventListener('change', function() {
  var pwd = document.getElementById('password');
  pwd.type = this.checked ? 'text' : 'password';
});
</script>
    </div>
  </div>
</body>
</html>