<?php
$servername = "localhost";
$username = "root";  // Default in XAMPP
$password = "";      // Leave empty in XAMPP
$database = "sahiba_website";  // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Database connected successfully!";
}
?>
