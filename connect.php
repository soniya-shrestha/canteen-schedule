<?php
$servername = "localhost";
$username = "root"; // root
$password = ""; //
$db = 'schedule';

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>


