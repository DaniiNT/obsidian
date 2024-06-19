<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan dengan kata sandi root Anda
$dbname = "donasi_masjid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
