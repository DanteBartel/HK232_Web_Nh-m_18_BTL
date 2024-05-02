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
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the content of the PUT request
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        // Get params
        $username = $data["username"];
        $password = $data["password"];
        $type = $data["type"];
        $email = $data["email"];

        // DB
        require 'db.php';

        // Prepare SQL statement
        $sql = "INSERT INTO accounts (username, password, type, email) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssis", $username, $password, $type, $email);

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(201); // 201 Created
            echo json_encode([
                'status' => 'success',
                'message' => 'Data added successfully'
            ]);
        } else {
            http_response_code(422); // 422 Unprocessable Entity
            echo json_encode([
                'status' => 'error',
                'message' => 'Error adding data: ' . $conn->error
            ]);
        }
        
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        // No data received
        http_response_code(400); // Bad Request
        echo json_encode([
            'status' => 'error',
            'message' => 'No data received'
        ]);
    }
} else {
    // Handle unsupported methods
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method not allowed']);
}
?>