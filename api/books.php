<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['page'])) {
        // Init variable
        $page = $_GET['page'];
        $limit = 10; // Number of items per page
        $start = ($page - 1) * $limit; // Starting limit for MySQL query
        $books = [];

        // DB
        require 'db.php';

        // Query to fetch data with pagination
        $sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books LIMIT $start, $limit";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $books[] = $row;
            }
        }

        // Total pages
        $sql = "SELECT COUNT(id) AS total FROM books";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $total_pages = ceil($row["total"] / $limit); // Total pages

        // Close the connection
        $conn->close();

        // Return the json
        echo json_encode([
            'bookDatas' => $books,
            'total_pages' => $total_pages
        ]);
    } else {
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
    }
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