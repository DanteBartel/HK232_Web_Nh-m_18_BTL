<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Init variable
    $books = [];

    // DB
    require 'db.php';

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