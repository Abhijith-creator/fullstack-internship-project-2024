<?php
// Database connection
$host = "sql112.infinityfree.com";
$user = "if0_40127584";
$pass = "YOUR_VPANEL_PASSWORD";  // replace with your InfinityFree password
$db   = "if0_40127584_Online_cosmetic_shops";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
