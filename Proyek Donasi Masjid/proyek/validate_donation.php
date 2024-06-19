<?php
session_start();
include('db_connection.php');

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE detail_donasi SET status='diterima' WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Donasi terverifikasi!";
    } else {
        echo "Error: " . $conn->error;
    }
}

header("Location: admin_panel.php");
?>
