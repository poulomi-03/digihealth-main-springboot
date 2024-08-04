<?php
// Display errors for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
session_start();

// Set header to return JSON response
header('Content-Type: application/json');

// Decode the JSON input
$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

// Get product name from the input data
$name = $data['name'];

// Check if user_id is set in the session
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

$user_id = $_SESSION['user_id'];

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO cart (user_id, product_name) VALUES (?, ?)");
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Prepare statement failed: ' . $conn->error]);
    exit;
}

// Bind parameters (both user_id and product_name are strings)
$stmt->bind_param("ss", $user_id, $name);

// Execute the statement
if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Database insert failed: ' . $stmt->error]);
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
