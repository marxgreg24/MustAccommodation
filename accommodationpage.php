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
                Accommodation Page
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
                    <div  class="dropdown">
                        <a href="logout.php" onclick="logout()">Logout</a>
                    </div>
                    <div class="dropdown">
                        <a href="#" onclick="history.back()">Back</a>
                    </div>
                </div>
            </header>

            <div class="pageName">
                <h1 >ACCOMMODATION</h1>
            </div>
                

            <div class="home">
                <div class="image-container">
                    <img class="kihumuro" src="images/hostel-Kihumuro-1024x683.svg" alt="Kihumuro Boys Hall" title="Kihumuro Boys Hall">
                </div>
                <div class="text-container">
                    <h2>University Halls</h2>
                    <p>Comfortable and affordable accomodation within the University premises</p>
                    <a href="HallsPage.php"class="button2">HALLS</a>
                </div>
            </div>

            <div class = "home">
                <div class = "image-container">
                    <img src = "images/IMG-20211229-WA0023.webp" alt ="Tankhill" title = "Tankhill">
                </div>
                <div class="text-container">
                    <h2>Hostels</h2>
                    <p>Connect, explore, and relax</p>
                    <a href="HostelsPage.php" class="button2">HOSTELS</a>
                </div>
            </div>

            <div class="home">
                <div class="image-container">
                    <img src="images/karosgarden1.jpg" alt="Karos gardens" title="Karos Gardens">
                </div>
                <div class="text-container">
                    <h2>Rentals</h2>
                    <p> Beautiful and affordable rentals around the University premises</p>
                    <a href ="rentalpage.php" class="button2">RENTALS</a>
                </div>
            </div>
            <footer>
                <div class="end">
                    <p>&copy; 2024 Mbarara University Accomodation Management</p>
                </div>
            </footer>
        </body>
    </html>