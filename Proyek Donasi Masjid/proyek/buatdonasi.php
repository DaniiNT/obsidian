<?php
session_start();
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $sql = "INSERT INTO donasi (nama) VALUES ('$nama')";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_panel.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Donasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Buat Donasi Baru</h1>
        <div class="menu">
            <div class="menu-icon" onclick="toggleMenu()">
                &#x22EE;
            </div>
            <div id="dropdown" class="dropdown-content">
                <a href="index.php">Home</a>
                <a href="login.php">Admin Login</a>
            </div>
        </div>
    </header>
    <div class="container">
        <form method="post" action="" enctype="multipart/form-data">
            Nama Donasi: <input type="text" name="nama" required><br>
            <button type="submit">Buat Donasi</button>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
