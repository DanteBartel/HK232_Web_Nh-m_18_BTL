<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get params and type of query
    $id = $_GET["id"];

    // DB
    require 'db.php';

    // Read a book by id
    $sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Execute the stmt
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $book = $result->fetch_assoc();
        http_response_code(200); // 200 OK
        echo json_encode($book);
    } else {
        http_response_code(404); // 404 Not Found
        echo json_encode([
            'status' => 'error',
            'message' => 'Error reading data: ' . $conn->error
        ]);
    }

    // Close the connection
    $stmt->close();
    $conn->close();
} else {
    // Handle unsupported methods
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method not allowed']);
}
?>