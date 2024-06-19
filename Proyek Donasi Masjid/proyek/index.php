<?php
session_start();
include('db_connection.php');

// Mendapatkan data donasi untuk ditampilkan di home page dengan paginasi
$limit = 10; // Jumlah donasi per halaman
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM donasi ";
$result = $conn->query($sql);

$total_sql = "SELECT COUNT(*) FROM donasi";
$total_result = $conn->query($total_sql);
$total_donasi = $total_result->fetch_row()[0];
$total_pages = ceil($total_donasi / $limit);

// Mendapatkan detail donasi terbaru jika ada
$donation_details = null;
if (isset($_GET['donation_id'])) {
    $donation_id = $_GET['donation_id'];
    $donation_sql = "SELECT * FROM donasi WHERE id = $donation_id";
    $donation_result = $conn->query($donation_sql);
    if ($donation_result->num_rows > 0) {
        $donation_details = $donation_result->fetch_assoc();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi Masjid</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Selamat Datang di Donasi Masjid</h1>
    </header>
    <div class="container">
        <h2>Daftar Donasi</h2>
        <?php if ($donation_details): ?>
        <div class="donation-details">
            <h3>Detail Donasi Anda:</h3>
            <p>ID Donasi: <?php echo $donation_details['id']; ?></p>
            <p>Jumlah Donasi: <?php echo $donation_details['jumlah']; ?></p>
            <p>Bukti Donasi: <a href="uploads/<?php echo $donation_details['bukti_donasi']; ?>" target="_blank"><?php echo $donation_details['bukti_donasi']; ?></a></p>
            <p>Tanggal: <?php echo $donation_details['date']; ?></p>
            <p>Status: <?php echo $donation_details['status']; ?></p>
        </div>
        <?php endif; ?>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>

            <?php $i=1; while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><a href="detail_donasi.php?id=<?php echo $row['id']; ?>" class="btn" style="background-color: #4CAF50;">Detail Donasi</a></td>
            </tr>
            <?php $i++; endwhile; ?>
        </table>

      
        <br>
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
    <script src="scripts.js"></script>
</body>
</html>
