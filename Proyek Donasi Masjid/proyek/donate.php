<?php
session_start();
include('db_connection.php');

if(!isset($_GET['idn'])) {
    header('Location: index.php');
    exit;
    }
    $id_donate = $_GET['idn'];
    
    $sql = "SELECT id FROM donasi WHERE id = $id_donate";
    $result = $conn->query($sql);
    
    if($result->num_rows == 0){
        header('Location: index.php');
        exit;
        }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $bukti_donasi = $_FILES['bukti_donasi']['name'];
    $status = 'menunggu';
    echo "Proses Beri Donasi";
    
    // Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["bukti_donasi"]["name"]);
    move_uploaded_file($_FILES["bukti_donasi"]["tmp_name"], $target_file);
    
    $sql = "INSERT INTO detail_donasi (jumlah, bukti_donasi, status,donasi_id) VALUES ('$jumlah', '$bukti_donasi', '$status','$id_donate')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Query Berhasil";
        $last_id = $conn->insert_id;
        $_SESSION['donation_id'] = $last_id;
        header("Location: detail_donasi.php?id=$id_donate");
        } else {
        echo "Gagal query";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beri Donasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Beri Donasi</h1>
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
        <form method="post"  enctype="multipart/form-data">
            Nama: <input type="text" name="nama" required><br>
            Jumlah Donasi: <input type="number" step="0.01" name="jumlah" required><br>
            Bukti Donasi: <input type="file" name="bukti_donasi" required><br>
            <button type="submit">Beri Donasi</button>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
