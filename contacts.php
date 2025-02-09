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
    <title>Contact Us - Mbarara University Accommodation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="title">
            <img class="logo" src="images/must-logo.svg" alt="Mbarara University logo">
            <h1>Contact Us</h1>
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
                <a href="logout.php">Logout</a>
            </div>
            <div class="dropdown">
                <a href="#" onclick="history.back()">Back</a>
            </div>
        </div>
    </header>
    
    <main>
        <section class="contacts">
            <h2>Contacts for Custodians and Managers</h2>
            <p>Reach out to the custodians and managers of various halls, hostels, and rentals for any inquiries or assistance.</p>
            
            <div class="contact-list">
                <div class="contact-item">
                    <h3>Boy's Hall - Kihumuro Campus</h3>
                    <p><strong>Custodian:</strong>Nimusiima Racheal</p>
                    <p><strong>Phone:</strong> +256 701 123456</p>
                    <p><strong>Email:</strong> nimusiimaracheal@must.ac.ug</p>
                </div>
                
                <div class="contact-item">
                    <h3>Girl's Hall - Kihumuro Campus</h3>
                    <p><strong>Custodian:</strong> Ainomujuni Jane</p>
                    <p><strong>Phone:</strong> +256 701 654321</p>
                    <p><strong>Email:</strong> ainomujunijane@must.ac.ug</p>
                </div>
                
                <div class="contact-item">
                    <h3>Boy's Hall-Town Campus</h3>
                    <p><strong>Manager:</strong>Penelop Ayebare</p>
                    <p><strong>Phone:</strong> +256 701 987654</p>
                    <p><strong>Email:</strong> penelopayebare@must.ac.ug</p>
                </div>
                
                <div class="contact-item">
                    <h3>Girl's Hall - Town Campus</h3>
                    <p><strong>Manager:</strong> Kyeyune Precious</p>
                    <p><strong>Phone:</strong> +256 701 543210</p>
                    <p><strong>Email:</strong> kyeyuneprecious@must.ac.ug</p>
                </div>
                
                <div class="contact-item">
                    <h3>Karos Gardens</h3>
                    <p><strong>Manager:</strong>Nassolo Miriam</p>
                    <p><strong>Phone:</strong> +256 701 876543</p>
                    <p><strong>Email:</strong> nassolomiriam@must.ac.ug</p>
                </div>

                <div class="contact-item">
                    <h3>Mama Belinda's</h3>
                    <p><strong>Manager:</strong> Mama Belinda</p>
                    <p><strong>Phone:</strong> +256 701 876543</p>
                    <p><strong>Email:</strong> mamabelinda@must.ac.ug</p>
                </div>

                <div class="contact-item">
                    <h3>Tank Hill</h3>
                    <p><strong>Manager:</strong> Ainomugisha Robert</p>
                    <p><strong>Phone:</strong> +256 701 876543</p>
                    <p><strong>Email:</strong> ainorobert@must.ac.ug</p>
                </div>

                <div class="contact-item">
                    <h3>Corpus Christi</h3>
                    <p><strong>Manager:</strong> Twesigye Lynette</p>
                    <p><strong>Phone:</strong> +256 701 876543</p>
                    <p><strong>Email:</strong> twesigyelynette@must.ac.ug</p>
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
