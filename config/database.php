<?php 
//database info
$servername = "localhost";
$username = "root";
$password = ""; //dafault pass blank

$datbase_name = "demog";

// Create connection
$conn = new mysqli($servername, $username, $password, $datbase_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "yess Connected successfully";

?>