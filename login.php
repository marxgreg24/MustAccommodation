<?php
session_start();
require 'connection.php'; 


try {
    $db = getDbConnection();
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Unable to connect to the database: " . $e->getMessage();
}

// Check if there is a success or error message stored in session
if (isset($_SESSION['login_error'])) {
    echo "<script>alert('Invalid username or password');</script>";
    unset($_SESSION['login_error']); // Clear the error after showing it
}

if (isset($_SESSION['login_success'])) {
    echo "<script>alert('Login successful!');</script>";
    unset($_SESSION['login_success']); // Clear the success message after showing it
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Assuming getDbConnection() returns a PDO connection
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    
    // Verify password using password_verify()
    if ($user && password_verify($password, $user['password'])) {
        // Store user details in session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        
        // Store success message in session
        $_SESSION['login_success'] = true;
        
        // Redirect to dashboard (or another page after successful login)
        header("Location: /website-project/MustAccommodation.php");
        exit;
    } else {
        // Store error message in session
        $_SESSION['login_error'] = true;
        
        // Reload the page with error message
        header("Location: login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<header>
    <div class="title">
        <img class="logo" src="images/must-logo.svg" alt="Mbarara University logo">
        <h1>Mbarara University<br>Accommodation</h1>
    </div>

  
</header>

<div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST" class="login-form">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="button2">LOGIN</button>
    </form>
</div>

<footer>
    <div class="end">
        <p>&copy; 2024 Mbarara University Accommodation Management</p>
    </div>
</footer>

</body>
</html>
