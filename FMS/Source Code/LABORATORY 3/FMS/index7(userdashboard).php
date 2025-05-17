
<?php
session_start();
if (!isset($_SESSION["username"]) || $_SESSION["role"] !== "user"){
    header("Location: index1(login).php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-image: url('ss2.png');
      display: flex;
      height: 100vh;
    }


    img.avatar {
      width: 50%;
      border-radius: 50%;
      display: block;
      margin: auto;
    }

    .sidenav {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: whitesmoke;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidenav a, .dropdown-btn {
      padding: 8px 8px 8px 32px;
      font-size: 26px;
      color: #818181;
      display: block;
      background-color: whitesmoke;
      border: none;
      text-align: left;
      font-family: 'Courier New', Courier, monospace;
      cursor: pointer;
      outline: none;
      width: 100%;
      transition: 0.3s;
      text-decoration: none;
    }

    .sidenav a:hover, .dropdown-btn:hover {
      color: #f1f1f1;
    }

    .sidenav .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .dropdown-container {
      display: none;
      background-color: #e0e0e0;
      padding-left: 20px;
    }

    .fa-caret-down {
      float: right;
      padding-right: 8px;
    }

    #main {
      transition: margin-left .5s;
      padding: 16px;
      color: whitesmoke;
    }

    @media screen and (max-height: 450px) {
      .sidenav {padding-top: 15px;}
      .sidenav a {font-size: 18px;}
    }

    .bottom-nav {
      margin-top: auto;
      text-align: center;
    }

    .bottom-nav p {
      margin-top: 5px;
      color: white;
    }

    #back-button {
      padding: 10px 25px;
      background-color: transparent;
      color: white;
      border: none;
      cursor: pointer;
      margin-top: 20px;
      font-size: 16px;
    }

    .content-wrapper {
      display: flex;
      flex: 1;
      padding: 15px;
      gap: 40px;
    }

    .main-content {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: white;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .header h1 {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 50px;
      margin-bottom: 5px;
      color: #000;
    }

    .header h3 {
      margin-top: 0;
      color: #000;
    }

    .buttons-container {
      display: flex;
      flex-direction: column;
      gap: 30px;
      padding: 40px;
      width: 500px;
    }

    .menu-button {
      padding: 40px 40px;
      border: 4px solid #fff;
      background-color: #1f3242;
      color: white;
      font-size: 20px;
      font-family: 'Courier New', Courier, monospace;
      cursor: pointer;
      text-align: center;
    }

    .active-button {
      border-color: greenyellow;
    }

    .form-container {
      flex: 1;
      max-width: 40%;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
    }

    .right-logo {
      width: 500px;
      height: auto;
      display: block;
      transform: translateX(-60px);
    }
  </style>
</head>
<body>

  <div id="mySidenav" class="sidenav">
    <img src="download.png" alt="Avatar" class="avatar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <br><br>
    <a href="user.php"> Account</a> 
    <a href="about.php">Messages</a>
    <a href="services.php">Settings</a>
    <a href="services.php">Notifications</a>
    <a href="services.php">Help</a>
    <a href="index0(homepage).php">Logout</a>
  </div>

  <div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  </div>

  <div class="content-wrapper">
    <div class="main-content">
      <div class="header">
  <h1>Welcome <?php echo htmlspecialchars($_SESSION["username"]); 
  ?> 
  </h1>
  <h3> Welcome to Your Fitness Journey</h3>
</div>
      <div class="buttons-container">
        <button class="menu-button" onclick="window.location.href='index7.php'">Attendance Tracker</button>
        <button class="menu-button" onclick="window.location.href='index8.php'">Facility Maintenance And Upkeep</button>
        <button class="menu-button" onclick="window.location.href='index9.php'">Appointment</button>
      </div>
    </div>


    <div class="form-container">
      <br>
      <img src="logo.png" alt="RMMC Logo" class="right-logo">
    </div>
  </div>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }

    const dropdowns = document.getElementsByClassName("dropdown-btn");
    for (let i = 0; i < dropdowns.length; i++) {
      dropdowns[i].addEventListener("click", function () {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        content.style.display = content.style.display === "block" ? "none" : "block";
      });
    }

    document.addEventListener('DOMContentLoaded', function () {
      const menuButtons = document.querySelectorAll('.menu-button');
      menuButtons.forEach(button => {
        button.addEventListener('click', function () {
          menuButtons.forEach(btn => btn.classList.remove('active-button'));
          this.classList.add('active-button');
        });
      });
    });
  </script>
</body>
</html>
