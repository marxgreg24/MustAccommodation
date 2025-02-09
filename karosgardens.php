<?php
//session_start();
require 'authMiddleware.php';
authMiddleware();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit;
}

//echo "Welcome, " . $_SESSION['username'];

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not authenticated
    exit;
}

echo "Welcome, " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Overview - Mbarara University Accommodation</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <header>
        <div class="links">
            <img class="logo" src="images/must-logo.svg" alt="Mbarara University logo">
            <h1>Karos Gardens</h1>
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
                <a href="logout.php" onclick="logout()">LOG OUT</a>
            </div>

            <div class="dropdown">
                <a href="#" onclick="history.back()">Back</a>
            </div>
        </div>
    </header>

    <div class="floor">
        <h1>Level One</h1>
    </div>

    <main>
        <div class="room-container">
            
            <div class="room-card">
                <img class="room-image" src="images/2423.jpg" alt="Room:G101">
                <div class="room-info">
                    <h3>Room 01</h3>
                    <form>
                        <div>
                            <label for="occupant101">Occupant:</label>
                            <input type="text" id="occupant101" value="Joy Nam" readonly>
                        </div>
                        
                        <div>
                            <label for="status101">Status:</label>
                            <input type="text" id="status101" value="Occupied" readonly>
                        </div>
                        
                        <div>
                            <label for="type101">Room Type:</label>
                            <input type="text" id="type101" value="Single" readonly>
                        </div>
                        
                        <div>
                            <label for="price101">Price:</label>
                            <input type="text" id="price101" value="UGX 200,000 per month" readonly>
                        </div>
                        
                        <button class="admin-edit" onclick="editRoomInfo(101)">Edit Room Info</button>
                        <button class="button2">BOOK</button>
                    </form>
                </div>
            </div>

            <!-- More room cards follow the same structure -->
            <div class="room-card">
                <img class="room-image" src="images/2423.jpg" alt="Room:G102">
                <div class="room-info">
                    <h3>Room 02</h3>
                    <form>
                        <div>
                            <label for="occupant102">Occupant:</label>
                            <input type="text" id="occupant102" value="Jane Smith & Joseph Opit" readonly>
                        </div>
                        
                        <div>
                            <label for="status102">Status:</label>
                            <input type="text" id="status102" value="Occupied" readonly>
                        </div>
                        
                        <div>
                            <label for="type102">Room Type:</label>
                            <input type="text" id="type102" value="Double" readonly>
                        </div>
                        
                        <div>
                            <label for="price102">Price:</label>
                            <input type="text" id="price102" value="@UGX 180,000 per month" readonly>
                        </div>
                        
                        <button class="admin-edit" onclick="editRoomInfo(102)">Edit Room Info</button>
                        <button class="button2">BOOK</button>
                    </form>
                </div>
            </div>

            <div class="room-card">
                <img class="room-image" src="images/2423.jpg" alt="Room:G102">
                <div class="room-info">
                    <h3>Room 03</h3>
                    <form>
                        <div>
                            <label for="occupant103">Occupant:</label>
                            <input type="text" id="occupant103" value="Jane Smith & Joseph Opit" readonly>
                        </div>
                        
                        <div>
                            <label for="status103">Status:</label>
                            <input type="text" id="status103" value="Occupied" readonly>
                        </div>
                        
                        <div>
                            <label for="type103">Room Type:</label>
                            <input type="text" id="type103" value="Double" readonly>
                        </div>
                        
                        <div>
                            <label for="price103">Price:</label>
                            <input type="text" id="price103" value="@UGX 180,000 per month" readonly>
                        </div>
                        
                        <button class="admin-edit" onclick="editRoomInfo(102)">Edit Room Info</button>
                        <button class="button2">BOOK</button>
                    </form>
                </div>
            </div>

            <div class="room-card">
                <img class="room-image" src="images/2423.jpg" alt="Room:G102">
                <div class="room-info">
                    <h3>Room 04</h3>
                    <form>
                        <div>
                            <label for="occupant104">Occupant:</label>
                            <input type="text" id="occupant104" value="Jane Smith & Joseph Opit" readonly>
                        </div>
                        
                        <div>
                            <label for="status104">Status:</label>
                            <input type="text" id="status104" value="Occupied" readonly>
                        </div>
                        
                        <div>
                            <label for="type104">Room Type:</label>
                            <input type="text" id="type104" value="Double" readonly>
                        </div>
                        
                        <div>
                            <label for="price104">Price:</label>
                            <input type="text" id="price104" value="@UGX 180,000 per month" readonly>
                        </div>
                        
                        <button class="admin-edit" onclick="editRoomInfo(102)">Edit Room Info</button>
                        <button class="button2">BOOK</button>
                    </form>
                </div>
            </div>

            <div class="room-card">
                <img class="room-image" src="images/2423.jpg" alt="Room:G102">
                <div class="room-info">
                    <h3>Room 05</h3>
                    <form>
                        <div>
                            <label for="occupant105">Occupant:</label>
                            <input type="text" id="occupant105" value="Ahimbisibwe Daniel & Feni Tom" readonly>
                        </div>
                        
                        <div>
                            <label for="status05">Status:</label>
                            <input type="text" id="status05" value="Occupied" readonly>
                        </div>
                        
                        <div>
                            <label for="type105">Room Type:</label>
                            <input type="text" id="type05" value="Double" readonly>
                        </div>
                        
                        <div>
                            <label for="price05">Price:</label>
                            <input type="text" id="price05" value="@UGX 180,000 per month" readonly>
                        </div>
                        
                        <button class="admin-edit" onclick="editRoomInfo(102)">Edit Room Info</button>
                        <button class="button2">BOOK</button>
                    </form>
                </div>
            </div>

            <div class="room-card">
                <img class="room-image" src="images/2423.jpg" alt="Room:G102">
                <div class="room-info">
                    <h3>Room 06</h3>
                    <form>
                        <div>
                            <label for="occupant06">Occupant:</label>
                            <input type="text" id="occupant06" value="" readonly>
                        </div>
                        
                        <div>
                            <label for="status06">Status:</label>
                            <input type="text" id="status06" value="Free" readonly>
                        </div>
                        
                        <div>
                            <label for="type06">Room Type:</label>
                            <input type="text" id="type06" value="Double" readonly>
                        </div>
                        
                        <div>
                            <label for="price06">Price:</label>
                            <input type="text" id="price06" value="@UGX 180,000 per month" readonly>
                        </div>
                        
                        <button class="admin-edit" onclick="editRoomInfo(102)">Edit Room Info</button>
                        <button class="button2">BOOK</button>
                    </form>
                </div>
            </div>


        </div>

    
    </main>

    <footer>
        <p>&copy; 2024 Mbarara University Accommodation Management</p>
    </footer>

    <script>
        // Function to handle editing - Restricted to admin only
        function editRoomInfo(roomNumber) {
            const isAdmin = true; // Replace with actual admin authentication
            if (isAdmin) {
                alert(`Editing Room ${roomNumber}`);
                // Code to open edit form or popup
            } else {
                alert("You do not have permission to edit this information.");
            }
        }
    </script>

</body>
</html>