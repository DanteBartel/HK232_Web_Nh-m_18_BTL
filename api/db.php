<?php
// DB info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    http_response_code(500); // 500 Internal Server Error
    echo json_encode([
        'status' => 'error',
        'message' => 'Error connect to database: ' . $conn->connect_error
    ]);
    die("Connection failed: " . $conn->connect_error);
}
?>

