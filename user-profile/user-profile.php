<?php
session_start();
$show_popup = isset($_SESSION['update_success']) && $_SESSION['update_success'];
unset($_SESSION['update_success']);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data for display
$email = $_SESSION['email'];
$sql = "SELECT * FROM registeredusers WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $user_profile_picture = base64_encode($row['user_profile_picture']);
} else {
    // Handle if user data not found
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiHealth</title>

    <!-- title icon -->
    <link rel="icon" href="../assets/images/home-section/logo/logo-main.png" type="image/x-icon" />
    <!-- title icon -->

    <!-- all linked css -->
    <link rel="stylesheet" href="../styles/universal-css-design/universal-css-design.css">
    <link rel="stylesheet" href="user-profile.css">
    <!-- all linked css -->

    <!-- universal google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- universal google fonts -->

    <!-- logo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <!-- logo font -->
</head>

<body>
    <div class="profile-outer">
        <div class="profile-left">
            <div class="profile-img">
                <img src="data:image/jpeg;base64,<?php echo $user_profile_picture; ?>" alt="Profile Picture">
            </div>
            <p>User ID</p>
            <?php
            if (isset($_SESSION['user_id'])) {
                echo '<p style="cursor:pointer;">' . htmlspecialchars($_SESSION['user_id']) . '</p>';
            } else {
                echo '<p style="cursor:pointer;"> User ID not found </p>';
            }
            ?>

            <p>User Name</p>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<p style="cursor:pointer;">' . htmlspecialchars($_SESSION['username']) . '</p>';
            } else {
                echo '<p style="cursor:pointer;"> User Name not found </p>';
            }
            ?>

            <p>Registration Date</p>
            <?php
            if (isset($_SESSION['registration_date'])) {
                echo '<p style="cursor:pointer;">' . htmlspecialchars($_SESSION['registration_date']) . '</p>';
            } else {
                echo '<p style="cursor:pointer;"> Registration Date not found </p>';
            }
            ?>
        </div>

        <div class="profile-right">
            <h1>Account Information</h1>
            <div class="form-info">
                <div class="cant-edit">
                    <input type="text" value="<?php echo htmlspecialchars($_SESSION['user_id']); ?>" readonly="readonly"
                        style="color: white; background-color: grey;" />
                    <input type="text" value="<?php echo htmlspecialchars($_SESSION['email']); ?>" readonly="readonly"
                        style="color: white; background-color: grey;" />
                    <input type="text" value="<?php echo htmlspecialchars($_SESSION['phone']); ?>" readonly="readonly"
                        style="color: white; background-color: grey;" />
                </div>
                <div class="can-edit">
                    <form action="update-profile.php" method="POST" enctype="multipart/form-data">
                        <div class="first">
                            <input type="text" placeholder="Your Name" name="name">
                            <input type="number" placeholder="Your Age" name="age">
                            <input type="text" placeholder="Select Blood Group" name="blood_group">
                        </div>
                        <div class="first">
                            <input type="date" placeholder="Your Birth Date" name="date_of_birth">
                            <input type="text" placeholder="Your Country" name="country">
                            <input type="text" placeholder="Your City" name="city">
                        </div>
                        <div class="first">
                            <input id="file-upload" type="file" accept="image/jpeg, image/png, image/jpg" name="image">
                        </div>
                        <div class="first">
                            <input type="password" placeholder="New Password" name="new_password">
                            <input type="password" placeholder="Confirm New Password" name="confirm_new_password">
                        </div>
                        <div class="first">
                            <button type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if ($show_popup): ?>
        <div class="overlay active"></div>
        <div class="popup active">
            <p style="color: black; font-weight: 600">Details updated successfully!</p>
            <button onclick="closePopup()">Close</button>
        </div>
    <?php endif; ?>

    <!-- script for update-success-pop-up starts -->
    <script>
        function closePopup() {
            document.querySelector('.popup').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
        }

        // Show the popup if the session variable was set
        <?php if ($show_popup): ?>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelector('.popup').classList.add('active');
                document.querySelector('.overlay').classList.add('active');
            });
        <?php endif; ?>
    </script>
       <!-- script for update-success-pop-up ends -->

</body>

</html>
