<?php
function getDbConnection() {
    $host = "localhost";        
    $dbname = "mustaccommodation";  
    $port = "3306";              
    $user = "root";     
    $password = ""; 
    try {
        $dsn = "mysql:host=$host;dbname=$dbname;port=$port";
        return new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        die("Unable to connect to the database: " . $e->getMessage());
    }
}
