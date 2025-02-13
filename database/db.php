<?php
$host = "localhost";  // XAMPP default host
$user = "root";       // Default user in XAMPP
$password = "";       // No password for root user
$database = "crud_app"; // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
