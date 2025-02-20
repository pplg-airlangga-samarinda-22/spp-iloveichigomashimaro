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
            <th>Nama</th>
            <th>Nominal</th>
        </thead>
        <tbody>
            <?php
                $nisn = $_SESSION['nisn'];
                $query = "SELECT siswa.id_spp, siswa.nama, spp.nominal FROM siswa INNER JOIN spp ON siswa.nisn = spp.id_spp";
                $data = mysqli_query($koneksi,$query);
                while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?= $row['id_spp']; ?></td>
                <td><?= $row['nama']; ?></td>
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
