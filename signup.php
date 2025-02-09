<?php
session_start();
require 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $password]);
    
    header("Location:/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
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
        <h2>Sign Up</h2>
        <form action="#" method="POST" class="login-form" autocomplete="on">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" 
                       placeholder="Enter your username" required>
            </div>
            
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" 
                       placeholder="Enter your email" required>
            </div>
    
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" 
                       placeholder="Enter your password" required minlength="6">
            </div>
    
            <button type="submit" class="button2">SIGN UP</button>
        </form>
    </div>
    

    <footer>
        <div class="end">
            <p>&copy; 2024 Mbarara University Accommodation Management</p>
        </div>
    </footer>

</body>
</html>
