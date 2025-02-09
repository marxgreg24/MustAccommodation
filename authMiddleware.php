<?php
function authMiddleware() {
    // Start the session to check session variables
    session_start();

    // Check if the user_id session variable is set
    if (!isset($_SESSION['user_id'])) {
        // If not authenticated, redirect to the homepage or login page
        header("Location: /MustAccommodation.php");  // Change this to your login or homepage URL
        exit;
    }

    // Optional: Store user information in a session variable for use in protected pages
    // $_SESSION['user'] = ['user_id' => $_SESSION['user_id'], 'username' => $_SESSION['username']];
}
?>
