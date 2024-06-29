<?php
// include("config.php");
session_start();

// Database configuration
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "users";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confPassword = $_POST['confPassword'];

// Validate passwords match
if ($password !== $confPassword) {
    die("Passwords do not match.");
}

// Check if email already exists
$sql = "SELECT email FROM registeredusers WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Email already registered, set session message and redirect to index.html
    $stmt->close();
    $conn->close();
    header("Location: ../index.php");
    exit();
}

// Prepare an SQL statement
$sql = "INSERT INTO registeredusers (name, email, phone, password) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $phone, $password);

// Execute the statement
if ($stmt->execute()) {
    // Registration successful, set session message and redirect to index.html
    header("Location: ../index.php");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
