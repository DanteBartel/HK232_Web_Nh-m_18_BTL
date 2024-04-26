<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get id
    $id = $_GET["id"];

    // DB
    require 'db.php';

    // Read a book by id
    $sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $book = $result->fetch_assoc();
        http_response_code(200); // 200 OK
        echo json_encode($book);
    } else {
        http_response_code(500); // 500 Internal Server Error
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
        $isbn = $data["isbn"];
        $name = $data["name"];
        $price = $data["price"];
        $author = $data["author"];
        $description = $data["description"];
        $image = $data["image"];
        $quantity = $data["quantity"];

        // DB
        require 'db.php';

        // Prepare SQL statement
        $sql = "INSERT INTO books (isbn, name, price, author, description, image, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdsssi", $isbn, $name, $price, $author, $description, $image, $quantity);

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(201); // Created
            echo json_encode([
                'status' => 'success',
                'message' => 'Data added successfully'
            ]);
        } else {
            http_response_code(422); // Unprocessable Entity
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
} else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    // Get the content of the PUT request
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        // Get params
        $id = $data["id"];
        $isbn = $data["isbn"];
        $name = $data["name"];
        $price = $data["price"];
        $author = $data["author"];
        $description = $data["description"];
        $image = $data["image"];
        $quantity = $data["quantity"];

        // DB
        require 'db.php';

        // Prepare the SQL statement for execution
        $sql = "UPDATE books SET isbn=?, name=?, price=?, author=?, description=?, image=?, quantity=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdsssii", $isbn, $name, $price, $author, $description, $image, $quantity, $id);

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(200); // OK
            echo json_encode([
                'status' => 'success',
                'message' => 'Data updated successfully'
            ]);
        } else {
            http_response_code(500); // Internal error
            echo json_encode([
                'status' => 'error',
                'message' => 'Error updating data: ' . $conn->error
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
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Get the content of the PUT request
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        // Get params
        $id = $data["id"];

        // DB
        require 'db.php';

        // Prepare SQL statement
        $sql = "DELETE FROM books WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        // Execute the statement
        if ($stmt->execute()) {
            http_response_code(204); // No Content
            echo json_encode([
                'status' => 'success',
                'message' => 'Data deleted successfully'
            ]);
        } else {
            http_response_code(404); // Not found
            echo json_encode([
                'status' => 'error',
                'message' => 'Error deleting data: ' . $conn->error
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
            'message' => 'No id received'
        ]);
    }
} else {
    // Handle unsupported methods
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method not allowed']);
}
?>