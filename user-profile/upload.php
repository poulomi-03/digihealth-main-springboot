<?php
// Start session
session_start();

// Database connection
$servername = "localhost"; // your server name
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "users"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Get file info
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Allow only certain file formats
        $allowedfileExtensions = array('jpg', 'jpeg', 'png');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Convert file to binary data
            $imageData = file_get_contents($fileTmpPath);

            // Update the user's profile picture
            $userId = "DH20240001"; // Assuming DH2024001 is the user_id you want to update
            $stmt = $conn->prepare("UPDATE registeredusers SET user_profile_picture = ? WHERE user_id = ?");
            $stmt->bind_param("ss", $imageData, $userId);
            if ($stmt->execute()) {
                $_SESSION['upload_success'] = true;
            } else {
                $_SESSION['upload_success'] = false;
                $_SESSION['upload_error'] = "Error updating profile picture: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $_SESSION['upload_error'] = "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
        }
    } else {
        $_SESSION['upload_error'] = "File upload error. Please try again.";
    }

    // Close the connection
    $conn->close();

    // Redirect back to the form
    header("Location: index.php");
    exit;
}
?>
