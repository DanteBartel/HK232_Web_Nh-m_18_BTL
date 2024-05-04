<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Check request method
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Init variable
    $account_id = $_GET['account_id'];
    $return_type = $_GET['return_type'];

    // DB
    require 'db.php';

    // init
    $datas = [];
    $book_ids = [];

    // Get book_ids
    $sql = "SELECT book_id FROM favorite_book WHERE account_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $account_id);
    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $book_ids[] =  $row;
            }
        }
        $stmt->close();
        $conn->close();
    } else {
        $stmt->close();
        $conn->close();
        http_response_code(500); // 500 Internal Server Error
        echo json_encode([
            'status' => 'error',
            'message' => 'Error reading data: ' . $conn->error
        ]);
    }

    // Read objects of the selected type
    if ($return_type == 'books') {
        if (count($book_ids) > 0) {
            if (isset($_GET['page'])) {
                // Get books by page
                // Init variable
                $page = $_GET['page'];
                $limit = 10; // Number of items per page
                $start = ($page - 1) * $limit; // Starting limit for MySQL query
                $books = [];

                // DB
                require 'db.php';

                // Query to fetch data with pagination
                $sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books LIMIT $start, $limit";

                $sql = "SELECT id, isbn, name, price, author, description, image, quantity 
                        FROM books 
                        WHERE id IN (?" . str_repeat(",?", count($book_ids) - 1) . ")
                        LIMIT $start, $limit";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param(str_repeat("i", count($book_ids)), ...array_map(fn($data) => $data['book_id'], $book_ids));
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $books[] = $row;
                        }
                    }
                    $stmt->close();
                    $conn->close();
                } else {
                    $stmt->close();
                    $conn->close();
                    http_response_code(500); // 500 Internal Server Error
                    echo json_encode([
                        'status' => 'error',
                        'message' => 'Error reading data: ' . $conn->error
                    ]);
                }

                // Total pages
                $total_pages = ceil(count($book_ids) / $limit);

                // Return the json
                http_response_code(200); // 200 OK
                echo json_encode([
                    'bookDatas' => $books,
                    'total_pages' => $total_pages
                ]);
            } else {
                // Get all books

                // DB
                require 'db.php';

                // Prepare stmt
                $sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books WHERE id IN (?" . str_repeat(",?", count($book_ids) - 1) . ")";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param(str_repeat("i", count($book_ids)), ...array_map(fn($data) => $data['book_id'], $book_ids));
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $datas[] = $row;
                        }
                    }
                    $stmt->close();
                    $conn->close();
                    http_response_code(200); // 200 OK
                    echo json_encode($datas);
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
        }
    } else if ($return_type == 'book_ids') {
        $datas = $book_ids;
        http_response_code(200); // 200 OK
        echo json_encode($datas);
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the content of the PUT request
    $data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        // Get params
        $account_id = $data["account_id"];
        $book_id = $data["book_id"];

        // DB
        require 'db.php';

        // Prepare SQL statement
        $sql = "INSERT INTO favorite_book (book_id, account_id) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $book_id, $account_id);

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
        $account_id = $data["account_id"];
        $book_id = $data["book_id"];

        // DB
        require 'db.php';

        // Prepare SQL statement
        $sql = "DELETE FROM favorite_book WHERE book_id=? AND account_id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $book_id, $account_id);

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