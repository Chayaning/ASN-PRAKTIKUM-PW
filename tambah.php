<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Karyawan</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="POST">
        <label>NIP:</label><br>
        <input type="text" name="nip" required><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" required><br><br>

        <label>Departemen:</label><br>
        <input type="text" name="departemen" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>No. Telepon:</label><br>
        <input type="text" name="telepon" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $departemen = $_POST['departemen'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        $insert = mysqli_query($koneksi, "INSERT INTO table_karyawan VALUES (
            '$nip', '$nama', '$jabatan', '$departemen', '$email', '$telepon')");

        if ($insert) {
            echo "<script>alert('Data berhasil ditambahkan');window.location='index.php';</script>";
        } else {
            echo "<p>Gagal menyimpan data!</p>";
        }
    }
    ?>
</body>
</html>
