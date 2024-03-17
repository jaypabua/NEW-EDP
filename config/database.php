<?php 
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default Password

$database_name = "demog";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "REAL Connected successfully";

?>