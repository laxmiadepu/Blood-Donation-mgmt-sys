<?php
$host = "localhost";     // Database host (use '127.0.0.1' or your server IP if different)
$user = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "bbdms";     // The name of your database

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Uncomment below line to confirm successful connection
// echo "Connected successfully";
?>
