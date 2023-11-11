
<?php
// Database connection information
$host = "localhost";
$username = "root";
$password = "";
$database = "adfc";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}