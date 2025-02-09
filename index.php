<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mbarara University Accommodation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <img class="logo" src="images/must-logo.svg" alt="Mbarara University logo">
        </div>
        <div class="title">
            <h1>Campus Nest</h1>
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
                <a href="login.php">Login</a>
            </div>
            <div class="dropdown">
                <a href="#" onclick="history.back()">Back</a>
            </div>
        </div>

    </header>

        <main>
            <div class="home">
                <div class="image-container">
                    <img src="images/Hostel-town-campus-1024x683.png" alt="Boy's Hall Kihumuro campus" title="Boy's Hall Kihumuro Campus">
            
                </div>
              
                <div class="text-container">
                    <h2>Your Home Away From Home</h2>
                    <p>Discover comfortable and affordable accomodation options around Mbarara University</p>
                    <a  href="accommodationpage.php" class="button2">ACCOMODATION</a>
                </div>
                
            </div>
            <div class="features">
                <h2>Why Choose Us</h2>

                <div class="container">
                    <div class="image-text-wrapper">
                        <img src="images/10811.jpg" alt="image1">
                        <p>Reduce Booking Inconviniences</p>
                    </div>

                    <div class="image-text-wrapper">
                        <img src="images/2423.jpg"  alt="image2">
                        <p>Excellent Amenties</p>
                    </div>

                    <div class="image-text-wrapper">
                        <img src="images/3707919.jpg" alt="image3">
                        <p>Provide Locations</p>
                    </div>

                    <div class="image-text-wrapper">
                        <img src="images/sarmi8-54.jpg" alt="image4">
                        <p>Faster and Quick Booking</p>
                    </div>
                </div>
                
            </div>
        </main>
        
        <footer>
            <div class="end">
                <p>&copy; 2024 Mbarara University Accomodation Management</p>
            </div>
        </footer>
        <script src="script.js"></script>
       
    </body>        
