<?php
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
$email = $_POST['username'];
$password = $_POST['password'];

// Check if the email exists in the database
$sql = "SELECT email, password, name FROM registeredusers WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Bind the result to variables
    $stmt->bind_result($dbEmail, $dbPassword, $dbName);
    $stmt->fetch();

    // Verify the password
    if ($password == $dbPassword) {
        // Password is correct, set session variables
        $_SESSION['email'] = $dbEmail;
        $_SESSION['username'] = $dbName; // Store username in session
        
        $initial = substr($username, 0, 1);
        header("Location: ../index.php"); // Redirect to a welcome page or dashboard
    } else {
        // Password is incorrect
        echo "Invalid password.";
    }
} else {
    // Email does not exist
    echo "No account found with that email.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
