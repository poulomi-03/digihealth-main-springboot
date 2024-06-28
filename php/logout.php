<?php
// Start the session
session_start();

// Regenerate the session ID to prevent session fixation attacks
session_regenerate_id(true);

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to the homepage (index.html)
header("Location: ../index.php");
exit;
?>
