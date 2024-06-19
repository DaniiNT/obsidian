<?php
session_start();
include('db_connection.php');

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pastikan data donasi dengan ID yang diberikan ada dalam database sebelum menghapus
    $check_sql = "SELECT * FROM detail_donasi WHERE id=$id";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        // Data ditemukan, jalankan query DELETE
        $delete_sql = "DELETE FROM detail_donasi WHERE id=$id";

        if ($conn->query($delete_sql) === TRUE) {
            $_SESSION['message'] = "Donasi telah dihapus.";
            header("Location: admin_panel.php");
            exit;
        } else {
            $_SESSION['message'] = "Error: " . $conn->error;
            header("Location: admin_panel.php");
            exit;
        }
    } else {
        // Data tidak ditemukan, munculkan pesan kesalahan
        $_SESSION['message'] = "Donasi dengan ID tersebut tidak ditemukan.";
        header("Location: admin_panel.php");
        exit;
    }
}
?> 
