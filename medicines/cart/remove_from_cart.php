<?php
session_start();
include 'db_connection.php'; // Make sure you have a file to connect to your database

$data = json_decode(file_get_contents('php://input'), true);
$product_id = $data['product_id'];

// Assuming user_id is stored in session
$user_id = $_SESSION['user_id'];

$sql = "DELETE FROM cart WHERE user_id = ? AND product_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user_id, $product_id);

$response = [];
if ($stmt->execute()) {
    $response['success'] = true;
} else {
    $response['success'] = false;
}

echo json_encode($response);
?>
