<?php
$servername = "localhost";
$username = "root";
$password = "root"; // password will be blank for Xampp/Wamp users
$database = "php-poc";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>