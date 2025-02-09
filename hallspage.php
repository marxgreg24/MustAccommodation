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
            Halls Page
        </title>
        <link rel="stylesheet" href="style.css">
     
        
    </head>
    <body>
        <header>
            <div class="title">
                <img class="logo" src="images/must-logo.svg"  alt="Mbarara University logo">
                <h1>Campus Nest</h1>
            
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
                    </div>
                    <div class="dropdown">
                        <a href="#"  onclick="history.back()">Back</a>
                    </div>
            </div>
            
        </header>

        <div class="pageName">
            <h1>UNIVERSITY HALLS</h1>
        </div>
        
        <div class="home">
            <div class="image-container">
                <img class="kihumuro" src="images/hostel-Kihumuro-1024x683.svg" alt="Kihumuro Boys Hall" title="Kihumuro Boys Hall">
            </div>
            <div class="text-container">
                <h2>Kihumuro Halls</h2>
                <p>Comfortable and affordable accomodation within the Kihumuro Campus premises</p>
                <a href="kihumurohallspage.php" class="button2">KIHUMURO</a>
            </div>
        </div>

        <div class="home">
            <div class="image-container">
                <img class="kihumuro" src="images/Hostel-town-campus-1024x683.png" alt="Town Campus Halls" title="Town Campus Halls">
            </div>
            <div class="text-container">
                <h2>Town Campus Halls</h2>
                <p>Comfortable and affordable accomodation within the Town Campus premises</p>
                <a href="townhallspage.php" class="button2">TOWN</a>
            </div>
        </div>
        <footer>
            <div class="end">
                <p>&copy; 2024 Mbarara University Accomodation Management</p>
            </div>
        </footer>
    </body>
</html>