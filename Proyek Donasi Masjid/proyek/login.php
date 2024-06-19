<?php
session_start();
if (isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_panel.php");
    exit;
}

include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_panel.php");
    } else {
        $error = "Email atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin Login</h1>
    </header>
    <div class="container">
        <form method="post" action="">
            Email: <input type="email" name="email" required><br>
            Password: <input type="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
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
