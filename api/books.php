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
} else {
    // Handle unsupported methods
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method not allowed']);
}
?>