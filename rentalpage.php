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
<html lang="en"?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Rentals Page
        </title>
        <link rel="stylesheet" href="style.css">
       
    </head>
    <body>
        <header>
            <div class="title">
                <img class="logo" src="images/must-logo.svg"  alt="Mbarara University logo">
                <h1>Mbarara University<br> Accommodation</h1>
            
            </div>

            <div class="link">
                <nav class="dropdown">
                    <button class="button1">MENU</button>
                    <div class="dropdown-content">
                        <a href="index.php">HOME</a>
                        <a href="accommodationpage.php">ACCOMMODATION</a>
                        <a href="about-us.php">ABOUT US</a>
                        <a href="contacts.php">CONTACTS</a>
                    </div>
                </nav>
                <div  class="dropdown">
                    <a href="logout.php">logout</a>
                    <a href="#" onclick="history.back()">Back</a>
                </div>
            </div>
        </header>

        <div class="pageName">
            <h1>UNIVERSITY RENTALS</h1>
        </div>

        <div class="home">
            <div class="image-container">
                <img class="kihumuro" src="images/karosgarden2.jpg" alt="Karos Gardens" title="Karos Gardens">
            </div>
            <div class="text-container">
                <h2>Karos Gardens</h2>
                <p>Comfortable and affordable accomodation provided only to the gents</p>
                <p>Location: Ruharo along Bushenyi Road</p>
                <a href="karosgardens.php" class="button2">KAROS GARDENS</a>
            </div>
        </div>

        <div class="home">
            <div class="image-container">
                <img class="kihumuro" src="images/Hostel-town-campus-1024x683.png" alt="Kihumuro Girls Hall" title="Kihumuro Boys Hall">
            </div>
            <div class="text-container">
                <h2>Mama Belinda</h2>
                <p>Comfortable and affordable accomodation provided only to the ladies</p>
                <p>Location: Mile4 along Bushenyi Road</p>
                <a href="mamabelinda.php" class="button2">MAMA BELINDA</a>
            </div>
        </div>
        <footer>
            <div class="end">
                <p>&copy; 2024 Mbarara University Accomodation Management</p>
            </div>
        </footer>
    <body>
</html>