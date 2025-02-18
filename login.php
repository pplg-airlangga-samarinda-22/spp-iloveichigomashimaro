<?php
require "koneksi.php";

if ($_SERVER['REQUEST_METHOD']== 'POST') {
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $telepon =  $_POST['telepon'];
    $idspp = $_POST['idspp'];

    $sql = "SELECT * FROM siswa WHERE nis=? AND nama=? AND no_telp=? AND id_spp=? ";
    $row = $koneksi->execute_query($sql, [$nis, $name, $telepon, $idspp]);

    if (mysqli_num_rows($row) == 1) {
        session_start();
        $_SESSION['nis'] = $nis;
        header("location:index.php");
    } else {
        echo "<script>alert('Gagal Login!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Login</title>
</head>


<body>
    <form action="" method="post" class="form-login">
        <p>Silahkan Login</p>
        <div class="form-item">
            <label for="nis">NIS</label>
            <input type="number" name="nis" id="nis" required>
        </div>
        <div class="form-item">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-item">
            <label for="telepon">Nomor Telepon</label>
            <input type="tel" name="telepon" id="telepon" required>
        </div>
        <div class="form-item">
            <label for="idspp">ID spp</label>
            <input type="number" name="idspp" id="idspp" required>
        </div>
        <button type="submit">Login</button>
        <a href="register.php">register</a>
    </form>
</body>

</html>