<?php
    session_start();
    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SPP</title>
</head>
<style>

</style>
<body>
    <h1>Halaman SPP</h1>
    <table>
        <thead>
            <th>ID SPP</th>
            <th>Tahun</th>
            <th>Nominal</th>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $nisn = $_SESSION['nisn'];
                $data = mysqli_query($koneksi, "select * from spp");
                while ($row = mysqli_fetch_array($data)) {   
            ?>
            <tr>
                <td><?= $row['id_spp']; ?></td>
                <td><?= $row['tahun']; ?></td>
                <td><?= $row['nominal']; ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="index.php">Kembali</a>
</body>
</html>
