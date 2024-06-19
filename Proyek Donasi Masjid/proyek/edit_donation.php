<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include('db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM detail_donasi WHERE id=$id";
    $result = $conn->query($sql);
    $donation = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah = $_POST['jumlah'];
    $status = $_POST['status'];

    $sql = "UPDATE detail_donasi SET jumlah='$jumlah', status='$status' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: admin_panel.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Donasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Edit Donasi</h1>
    </header>
    <div class="container">
        <form method="post" action="">
            Jumlah Donasi: <input type="number" step="0.01" name="jumlah" value="<?php echo $donation['jumlah']; ?>" required><br>
            Status: 
            <select name="status">
                <option value="menunggu" <?php if ($donation['status'] == 'menunggu') echo 'selected'; ?>>Pending</option>
                <option value="diterima" <?php if ($donation['status'] == 'diterima') echo 'selected'; ?>>Verified</option>
                <option value="ditolak" <?php if ($donation['status'] == 'ditolak') echo 'selected'; ?>>Rejected</option>
            </select><br>
            <button type="submit">Update Donasi</button>
        </form>
    </div>
</body>
</html>
