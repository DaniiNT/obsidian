<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include('db_connection.php');

// Verifikasi donasi
if (isset($_GET['verify'])) {
    $id = $_GET['id'];
    $sql = "UPDATE detail_donasi SET status='diterima' WHERE id=$id";
    $conn->query($sql);
    header("Location: admin_panel.php");
    exit;
}

// Tolak donasi
if (isset($_GET['reject'])) {
    $id = $_GET['id'];
    $sql = "UPDATE detail_donasi SET status='ditolak' WHERE id=$id";
    $conn->query($sql);
    header("Location: admin_panel.php");
    exit;
}


$sql = "SELECT * FROM donasi ORDER BY id DESC";
$result = $conn->query($sql);

if ($result === false) {
    die("Error: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Panel</h1>
    </header>
    <div class="container">
        <?php
        if (isset($_SESSION['message'])) {
            echo "<script>alert('" . $_SESSION['message'] . "');</script>";
            unset($_SESSION['message']);
        }
        ?>
        <h2>Daftar Donasi</h2>
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
                <td><a href="detail_donasi_admin.php?id=<?php echo $row['id']; ?>" class="btn" style="background-color: #4CAF50;">Detail Donasi</a></td>
            </tr>
            <?php $i++; endwhile; ?>
        </table>
    </div>
    <div></div>
    <div class="container">
        <a href="buatdonasi.php" class="btn btn-buat">Buat Donasi Baru</a>
    </div>
    <div class="container">
        <a href="logout.php" class="btn btn-logout">Log Out</a>
    </div>
    <div class="menu">
        <div class="menu-icon" onclick="toggleMenu()">
            &#x22EE;
        </div>
        <div id="dropdown" class="dropdown-content">
            <a href="index.php">Home</a>
            <a href="login.php">Admin Login</a>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>