<?php
session_start();
include('db_connection.php');

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action == 'accept') {
        $status = 'diterima';
    } elseif ($action == 'reject') {
        $status = 'ditolak';
    } else {
        header("Location: admin_panel.php");
        exit();
    }

    $sql = "UPDATE detail_donasi SET status='$status' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
