<?php
$host = 'localhost';  // MariaDB host (on AWS Lightsail)
$user = 'root';       // Database username
$password = 'your_password'; // Database password
$dbname = 'movie_db'; // Database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
