<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$rawData = file_get_contents("php://input");
	$data = json_decode($rawData, true);
	$book_ids = $data['data'];

	// Get all books
	require 'db.php';

	// Prepare stmt

	// Select * from books where id in ({some book ids})
// Select * from books where id in ({some book ids})
	$sql = "SELECT id, isbn, name, price, author, description, image, quantity FROM books WHERE id IN (?" . str_repeat(",?", count($book_ids) - 1) . ")";

	$stmt = $conn->prepare($sql);
	$stmt->bind_param(str_repeat("i", count($book_ids)), ...$book_ids);

	if ($stmt->execute()) {
		$result = $stmt->get_result();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$datas[] = $row;
			}
		}
		http_response_code(200); // 200 OK
		echo json_encode($datas);
	} else {

		http_response_code(500); // 500 Internal Server Error
		echo json_encode([
			'status' => 'error',
			'message' => 'Error reading data: ' . $conn->error
		]);
	}
	$stmt->close();
	$conn->close();
} else {
	http_response_code(405); // Method Not Allowed
	echo json_encode(['message' => 'Method not allowed']);
}