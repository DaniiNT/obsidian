
            <?php
session_start();
include('db_connection.php');

if(!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
    }
    $donation_id = $_GET['id'];
    
    $sql = "SELECT id FROM donasi WHERE id = $donation_id";
    $result = $conn->query($sql);
    
    if($result->num_rows == 0){
        header('Location: index.php');
        exit;
        }


// Mendapatkan data donasi untuk ditampilkan di home page dengan paginasi

// Mendapatkan data donasi untuk ditampilkan di home page dengan paginasi
$limit = 5; // Jumlah donasi per halaman
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $limit;

$sql = "SELECT * FROM detail_donasi WHERE donasi_id = $donation_id LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

$total_sql = "SELECT COUNT(*) FROM detail_donasi WHERE donasi_id = $donation_id";
$total_result = $conn->query($total_sql);
$total_donasi = $total_result->fetch_row()[0];
$total_pages = ceil($total_donasi / $limit);



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

        <div class="btn btn-donate" style="">
            <a href="donate.php?idn=<?= $donation_id ?>" class="linkdonet" >Beri Donasi</a>
        </div>
        <div class="btn btn-donate" style="">
            <a href="index.php" class="linkdonet">Kembali</a>
        </div>

        <table>
            <tr>
                <th>No</th>
                <th>Jumlah</th>
                <th>Bukti Donasi</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>

            <?php $i=1; while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['jumlah']; ?></td>
                <td><img src="uploads/<?php echo $row['bukti_donasi']; ?>" alt="Bukti Donasi" style="max-width: 100px;"></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                </tr>
                <?php $i++; endwhile; ?>
            
        </table>

    
        <br>
        <div class="btn btn-page">
        <?php if ($page > 1): ?>
                <a href="detail_donasi.php?id=<?= $_GET['id']?>&page=<?php echo $page - 1; ?>">&laquo; Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="detail_donasi.php?id=<?= $_GET['id']?>&page=<?php echo $i; ?>" class="<?php if ($i == $page) echo 'active'; ?>"><?php echo $i; ?></a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="detail_donasi.php?id=<?= $_GET['id']?>&page=<?php echo $page + 1; ?>">Next &raquo;</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="menu">
            <div class="menu-icon" onclick="toggleMenu()">
                &#x22EE;
            </div>
            <div id="dropdown" class="dropdown-content">
                <a href="detail_donasi.php">Home</a>
                <a href="login.php">Admin Login</a>
            </div>
        </div>
    </header>
    <script src="scripts.js"></script>
</body>
</html>
