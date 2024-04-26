<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get params
    $username = $_POST["username"];
    $password = $_POST["password"]

    // DB
    require 'db.php';

    // Read a account by username
    $sql = "SELECT id, username, password FROM accounts WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    // Execute the stmt
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $account = $result->fetch_assoc();
        if ($account && ($password == $account['password'])) {
            http_response_code(200); // 200 OK
            echo json_encode([
                'id' => $account['id'], 
                'username' => $account['username']
            ]);
        } else {
            http_response_code(401); // 401 Unauthorized
            echo json_encode([
                'status' => 'error',
                'message' => 'Wrong password'
            ]);
        }
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