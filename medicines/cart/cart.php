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

// Debugging output
error_log(print_r($data, true)); // Log the received data for debugging

if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
    exit;
}

// Get product details from the input data
$name = isset($data['name']) ? $data['name'] : null;
$image = isset($data['image']) ? $data['image'] : null;
$price = isset($data['price']) ? $data['price'] : null;

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
$dbname = "digihealth_medicines_products";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $conn->connect_error]);
    exit;
}

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO cart (user_id, product_name, product_image, product_price) VALUES (?, ?, ?, ?)");
if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Prepare statement failed: ' . $conn->error]);
    exit;
}

// Bind parameters (user_id, product_name, product_image, and product_price are all strings)
$stmt->bind_param("ssss", $user_id, $name, $image, $price);

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
