<?php
$servername = "localhost";
$username = "root";
$password = "root"; // Use your actual password
$database = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
