<?php
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nis = $_POST['nis'];

    //cek dulu apakah nis telah terdaftar
    $sql = "SELECT * FROM siswa WHERE nis=?";
    $cek = $koneksi->execute_query($sql, [$nis]);

    if (mysqli_num_rows($cek) == 1) {
        echo "<script>alert('NIS sudah digunakan!')</script>";
    } else {
        $name = $_POST['name'];
        $telepon = $_POST['telepon'];
        $idspp = $_POST['idspp'];
        $idkelas = $_POST['idkelas'];
        $sql = "INSERT INTO siswa SET nis=?, nama=?, no_telp=?, id_spp=?, id_kelas=?";
        $koneksi->execute_query($sql, [$nis, $name, $telepon, $idspp, $idkelas]);
        echo "<script>alert('Pendaftaran Berhasil!')</script>";
        header("location:login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Registrasi NIS</h1>
    <form action="" method="post">
        <div class="form-item">
            <label for="nis">NIS</label>
            <input type="number" name="nis" id="nis">
        </div>
        <div class="form-item">
            <label for="name">Nama Lengkap</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-item">
            <label for="telepon">Telepon</label>
            <input type="tel" name="telepon" id="telepon">
        </div>
        <div class="form-item">
            <label for="idspp">Masukkan ID SPP</label>
            <input type="number" name="idspp" id="idspp">
        </div>
        <div class="form-item">
            <label for="idkelas">Masukkan ID Kelas</label>
            <input type="number" name="idkelas" id="idkelas">
        </div>
        <button type="submit">Register</button>
    </form>
    <a href="login.php">Batal</a>
</body>
</html>