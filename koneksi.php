<?php
// Database connection using mysqli
$servername = "localhost";
$username = "root"; // replace with your username
$password = ""; // replace with your password
$dbname = "sig_32220004"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
