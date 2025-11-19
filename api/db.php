<?php
// Database connection info
$host = "localhost";       // MySQL server host
$user = "root";            // MySQL username (default XAMPP)
$password = "";            // MySQL password (default XAMPP is empty)
$dbname = "your_database_name";  // Change this to your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>