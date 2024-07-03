<?php
// Start session to get the user's email
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get the form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $blood_group = $_POST['blood_group'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $date_of_birth = $_POST['date_of_birth'];

    // Format the date to yyyy-mm-dd
    $date_of_birth = date('Y-m-d', strtotime($date_of_birth));

    // Get the user's email from session
    $email = $_SESSION['email'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("UPDATE registeredusers SET name=?, age=?, blood_group=?, dob=?, country=?, city=? WHERE email=?");

    // Bind the parameters
    $stmt->bind_param("sisssss", $name, $age, $blood_group, $date_of_birth, $country, $city, $email);

    // Execute the statement
    // if ($stmt->execute()) {
    //     echo "Profile updated successfully!";
    // } else {
    //     echo "Error updating profile: " . $stmt->error;
    // }

    // Execute the statement
    if ($stmt->execute()) {
        $_SESSION['update_success'] = true;
    } else {
        $_SESSION['update_success'] = false;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    header("Location: user-profile.php");
}
?>
