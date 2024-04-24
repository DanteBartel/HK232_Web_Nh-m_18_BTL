<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// DB
require_once 'db.php';

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Init variable
    $books = [];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Read all books
    $sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
    }

    // Close the connection
    $conn->close();

    // return the json
    echo json_encode($books);
} else {
    // Handle unsupported methods
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method not allowed']);
}

?>