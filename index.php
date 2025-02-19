<?php

    session_start();
    require_once "koneksi.php";
    if (empty($_SESSION['nisn'])) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pembayaran SPP</title>
</head>
<body>
    <h1>Selamat Datang di Aplikasi Pembayaran SPP</h1>
    <nav>
        <a href="spp.php">List SPP</a>
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>