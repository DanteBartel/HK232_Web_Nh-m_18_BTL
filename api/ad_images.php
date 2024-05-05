<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['book_id'])) {
        // Init variable
        $book_id = $_GET['book_id'];
        $ad_images = [];

        // Read all additional images of a book
        require 'db.php';
        $sql = "SELECT id, book_id, image FROM ad_images WHERE book_id = $book_id";
        $stmt = $conn->prepare($sql);

        // Run stmt
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $stmt->close();
            $conn->close();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $ad_images[] = $row;
                }
            }
            http_response_code(200); // 200 OK
            echo json_encode($ad_images);
        } else {
            $stmt->close();
            $conn->close();
            http_response_code(500); // 500 Internal Server Error
            echo json_encode([
                'status' => 'error',
                'message' => 'Error reading data: ' . $conn->error
            ]);
        }
    } else if (isset($_GET['id'])) {
        // Init variable
        $id = $_GET['id'];

        // Read a specific ad_image
        require 'db.php';
        $sql = "SELECT id, book_id, image FROM ad_images WHERE id = $id";
        $stmt = $conn->prepare($sql);

        // Run stmt
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $stmt->close();
            $conn->close();
            $row = $result->fetch_assoc();
            http_response_code(200); // 200 OK
            echo json_encode($row);
        } else {
            $stmt->close();
            $conn->close();
            http_response_code(500); // 500 Internal Server Error
            echo json_encode([
                'status' => 'error',
                'message' => 'Error reading data: ' . $conn->error
            ]);
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the content of the PUT request
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        // Get params
        $book_id = $data["book_id"];
        $image = $data["image"];

        // Prepare SQL statement
        require 'db.php';
        $sql = "INSERT INTO ad_images (book_id, image) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $book_id, $image);

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            http_response_code(201); // 201 Created
            echo json_encode([
                'status' => 'success',
                'message' => 'Data added successfully'
            ]);
        } else {
            $stmt->close();
            $conn->close();
            http_response_code(422); // 422 Unprocessable Entity
            echo json_encode([
                'status' => 'error',
                'message' => 'Error adding data: ' . $conn->error
            ]);
        }
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
        $image = $data["image"];

        // DB
        require 'db.php';

        // Prepare the SQL statement for execution
        $sql = "UPDATE ad_images SET image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $image, $id);

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            http_response_code(200); // OK
            echo json_encode([
                'status' => 'success',
                'message' => 'Data updated successfully'
            ]);
        } else {
            $stmt->close();
            $conn->close();
            http_response_code(500); // Internal error
            echo json_encode([
                'status' => 'error',
                'message' => 'Error updating data: ' . $conn->error
            ]);
        }
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

        // Prepare SQL statement
        require 'db.php';
        $sql = "DELETE FROM ad_images WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        // Execute the statement
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            http_response_code(204); // No Content
            echo json_encode([
                'status' => 'success',
                'message' => 'Data deleted successfully'
            ]);
        } else {
            $stmt->close();
            $conn->close();
            http_response_code(404); // Not found
            echo json_encode([
                'status' => 'error',
                'message' => 'Error deleting data: ' . $conn->error
            ]);
        }
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