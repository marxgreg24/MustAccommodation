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
            Kihumuro Halls Page
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
                <div class="dropdown">
                    <a href="logout.php">Logout</a>
                    <a href="#" onclick="history.back()">BACK</a>
                </div>
            </div>
        </header>

        <div class="pageName">
            <h1>TOWN HALLS</h1>
        </div>

        <div class="home">
            <div class="image-container">
                <img src="images/hostel-Kihumuro-1024x683.svg" alt="Kihumuro Boys Hall" title="Kihumuro Boys Hall">
            </div>
            <div class="text-container">
                <h2> Gents Hall</h2>
                <p>Comfortable and affordable accomodation provided only to the gents</p>
                <a href="townboyshall.php" class="button2">GENTS HALL</a>
            </div>
        </div>

        <div class="home">
            <div class="image-container">
                <img class="kihumuro" src="images/Hostel-town-campus-1024x683.png" alt="Kihumuro Girls Hall" title="Kihumuro Boys Hall">
            </div>
            <div class="text-container">
                <h2>Ladies Hall</h2>
                <p>Comfortable and affordable accomodation provided only to the ladies</p>
                <a href="towngirlshall.php" class="button2">LADIES HALL</a>
            </div>
        </div>
        <footer>
            <div class="end">
                <p>&copy; 2024 Mbarara University Accomodation Management</p>
            </div>
        </footer>
    </body>
</html>