<?php
include('db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM donasi WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $donasi = $result->fetch_assoc();
    } else {
        echo "Donasi tidak ditemukan.";
        exit();
    }
} else {
    echo "ID donasi tidak diberikan.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Donasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Konfirmasi Donasi</h1>
    </header>
    <div class="container">
        <h2>Detail Donasi Anda</h2>
        <table>
            <tr>
                <th>ID Donasi</th>
                <td><?php echo $donasi['id']; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?php echo $_POST['nama']; ?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td><?php echo $donasi['jumlah']; ?></td>
            </tr>
            <tr>
                <th>Bukti Donasi</th>
                <td><a href="uploads/<?php echo $donasi['bukti_donasi']; ?>" target="_blank"><?php echo $donasi['bukti_donasi']; ?></a></td>
            </tr>
            <tr>
                <th>Tanggal</th>
                <td><?php echo $donasi['date']; ?></td>
            </tr>
            <tr>
                <th>Status</th>
                <td><?php echo $donasi['status']; ?></td>
            </tr>
        </table>
        <a href="index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
