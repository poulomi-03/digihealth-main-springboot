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
    // Get the user's email from session
    if (!isset($_SESSION['email'])) {
        die("No user is logged in.");
    }
    $email = $_SESSION['email'];

    // Initialize variables for form data
    $name = $_POST['name'] ?? null;
    $age = $_POST['age'] ?? null;
    $blood_group = $_POST['blood_group'] ?? null;
    $country = $_POST['country'] ?? null;
    $city = $_POST['city'] ?? null;
    $date_of_birth = $_POST['date_of_birth'] ?? null;

    // Format the date to yyyy-mm-dd
    $date_of_birth = date('Y-m-d', strtotime($date_of_birth));

    // Initialize variables for SQL query
    $query = "UPDATE registeredusers SET name=?, age=?, blood_group=?, dob=?, country=?, city=?";
    $params = [$name, $age, $blood_group, $date_of_birth, $country, $city];
    $types = "sissss";

    // Check if a new profile image file is uploaded
    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Get file info
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Allow only certain file formats
        $allowedfileExtensions = array('jpg', 'jpeg', 'png');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Convert file to binary data
            $imageData = file_get_contents($fileTmpPath);

            // Add profile picture update to query
            $query .= ", user_profile_picture=?";
            $params[] = $imageData;
            $types .= "b"; // 'b' for blob data
        } else {
            $_SESSION['upload_error'] = "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
            header("Location: user-profile.php");
            exit;
        }
    }

    // Complete the query
    $query .= " WHERE email=?";
    $params[] = $email;
    $types .= "s";

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    // Handle blob data separately
    $stmt->bind_param($types, ...$params);

    // Debug: Output query and params
    error_log("Query: $query");
    error_log("Params: " . print_r($params, true));

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['update_success'] = true;
    } else {
        $_SESSION['update_success'] = false;
        $_SESSION['update_error'] = "Error updating profile: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    header("Location: user-profile.php");
    exit();
}
?>
