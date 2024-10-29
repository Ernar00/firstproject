<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Қош келдіңіз, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Бұл сіздің профиліңіз.</p>
    <a href="logout.php">Шығу</a>
</body>
</html>
