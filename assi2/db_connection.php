<?php
$servername = "Mysql@127.0.0.1:3306"; // Replace 'your_host_name' with your database host name (usually 'localhost')
$username = "root"; // Replace 'your_username' with your MySQL username
$password = "12345"; // Replace 'your_password' with your MySQL password
$database = "information"; // Replace 'your_database_name' with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
