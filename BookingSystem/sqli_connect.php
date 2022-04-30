<?php
$servername = "database-1.cn0jcj9v3ywu.ca-central-1.rds.amazonaws.com:3306";
$username = "zenon";
$password = 'Password123!';
$dbname = "zenonsDB";

// Create connection to sql server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>