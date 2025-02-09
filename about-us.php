<?php
//session_start();
require 'authMiddleware.php';
authMiddleware();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit;
}

//echo "Welcome, " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Mbarara University Accommodation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <img class="logo" src="images/must-logo.svg" alt="Mbarara University logo">
            <h1>About Us</h1>
        </div>
        
        <div class="link">
            <div class="dropdown">
                <button class="button1">MENU</button>
                <div class="dropdown-content">
                    <a href="index.php">HOME</a>
                    <a href="accommodationpage.php">ACCOMMODATION</a>
                    <a href="about-us.php">ABOUT US</a>
                    <a href="contacts.php">CONTACTS</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="logout.php`">Logout</a>
            </div>
            <div class="dropdown">
                <a href="#" onclick="history.back()">Back</a>
            </div>
        </div>
    </header>
    
    <main>
        <section class="about-us">
            <div class="about-container">
                <h2>Welcome to Mbarara University Accommodation Services</h2>
                <p>
                    Mbarara University Accommodation Services provides students with safe, comfortable, and affordable accommodation options in and around the Mbarara University campus. Our mission is to make student life easier by offering a variety of housing options tailored to meet the needs of our diverse student body.
                </p>
                <p>
                    With a commitment to excellence and student well-being, we ensure our accommodations are equipped with modern amenities and are conveniently located. Whether you are a new or returning student, we are here to make your stay at Mbarara University a memorable one.
                </p>
                <p>
                    Explore our website to learn more about our facilities, and feel free to contact us for further information or assistance in finding the right accommodation for you.
                </p>
            </div>

            <div class="about-features">
                <div class="feature-item">
                    <img src="images/support.jpg" alt="Support">
                    <h3>24/7 Support</h3>
                    <p>We provide round-the-clock support to ensure all your needs are met and to assist with any inquiries or concerns.</p>
                </div>
                <div class="feature-item">
                    <img src="images/safetyandsecurity.png" alt="Safety">
                    <h3>Safety and Security</h3>
                    <p>Your safety is our priority. Our accommodations have strict security measures to guarantee a safe living environment.</p>
                </div>
                <div class="feature-item">
                    <img src="images/student-community.jpg" alt="Community">
                    <h3>Student Community</h3>
                    <p>Experience a supportive community where students from diverse backgrounds come together to make university life more enjoyable.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="end">
            <p>&copy; 2024 Mbarara University Accommodation Management</p>
        </div>
    </footer>
</body>
</html>
