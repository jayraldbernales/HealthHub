<?php
$servername = 'localhost';
$username = 'root'; // Your database username
$password = ''; // Your database password
$dbname = 'inventory'; // Your database name

// Connecting to the database
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>