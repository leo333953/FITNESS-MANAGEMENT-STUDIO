<?php
$host = 'localhost';
$dbname = 'your_database_name';  // Change this to your actual database name
$username = 'your_username';     // Change this to your actual MySQL username
$password = '';     // Change this to your actual MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}