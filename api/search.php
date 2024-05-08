<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$key = "%" . $_GET['key'] . "%";

	require 'db.php';

	$books = [];

	$sql = "SELECT * FROM `books` WHERE `name` LIKE ?";
	$stmt = $conn->prepare($sql);
	$searchKey = "%" . $key . "%";
	$stmt->bind_param("s", $searchKey);
	if ($stmt->execute()) {
		$result = $stmt->get_result();
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$books[] = $row;
			}
		}
		http_response_code(200); // 200 OK
		echo json_encode($books);
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