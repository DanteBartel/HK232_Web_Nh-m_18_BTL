<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        // Get params and type of query
        $id = $_GET["id"];

        // DB
        require 'db.php';

        // Read an account by id
        $sql = "SELECT username, email FROM accounts WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        // Execute the stmt
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $account = $result->fetch_assoc();
            http_response_code(200); // 200 OK
            echo json_encode($account);
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
        // Init variable
        $accounts = [];

        // DB
        require 'db.php';

        // Read all books
        $sql = "SELECT id, username, email FROM accounts WHERE type=1";
        $results = $conn->query($sql);
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $accounts[] = $row;
            }
        }

        // Close the connection
        $conn->close();

        // return the json
        echo json_encode($accounts);
    }
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
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Get the content of the PUT request
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        // Get params
        $id = $data["id"];

        // DB
        require 'db.php';

        // Prepare SQL statement
        $sql = "DELETE FROM accounts WHERE id=?";
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