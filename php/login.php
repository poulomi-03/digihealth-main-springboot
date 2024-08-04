<?php
session_start();

// Database configuration
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "digihealth_users";

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
$sql = "SELECT email, age, blood_group, password, name, user_id, registration_date, phone FROM registeredusers WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Bind the result to variables
    $stmt->bind_result($dbEmail, $dbAge, $dbBloodGroup, $dbPassword, $dbName, $dbUserId, $dbRegistrationDate, $dbPhone);
    $stmt->fetch();

    // Verify the password
    if ($password == $dbPassword) {
        // Password is correct, set session variables
        $_SESSION['email'] = $dbEmail;
        $_SESSION['username'] = $dbName;
        $_SESSION['user_id'] = $dbUserId;
        $_SESSION['age'] = $dbAge;
        $_SESSION['blood_group'] = $dbBloodGroup;
        $_SESSION['registration_date'] = $dbRegistrationDate;
        $_SESSION['phone'] = $dbPhone;

        header("Location: ../index.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No account found with that email.";
}

$stmt->close();
$conn->close();
?>
