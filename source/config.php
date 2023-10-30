<?php
$servername = "mariadb"; 
$username = "db_user"; 
$password = "mijn_p@ss#"; 
$database = "bo pagina";
$port = 3306; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>