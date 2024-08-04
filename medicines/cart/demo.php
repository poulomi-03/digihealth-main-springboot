<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

$image = $data['image'];
$name = $data['name'];

$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "users"; // your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

$stmt = $conn->prepare("INSERT INTO add_to_cart (image, name) VALUES (?, ?)");
$stmt->bind_param("ss", $image, $name);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Database insert failed: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
