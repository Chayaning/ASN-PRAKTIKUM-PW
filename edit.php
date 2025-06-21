<?php
include 'koneksi.php';
$nip = $_GET['nip'];
$sql = mysqli_query($koneksi, "SELECT * FROM table_karyawan WHERE nip='$nip'");
$data = mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Karyawan</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="POST">
        <label>NIP:</label><br>
        <input type="text" name="nip" value="<?php echo $data['nip']; ?>" readonly><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" value="<?php echo $data['jabatan']; ?>" required><br><br>

        <label>Departemen:</label><br>
        <input type="text" name="departemen" value="<?php echo $data['departemen']; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $data['email']; ?>" required><br><br>

        <label>No. Telepon:</label><br>
        <input type="text" name="telepon" value="<?php echo $data['telepon']; ?>" required><br><br>

        <button type="submit" name="update">Update</button>
        <a href="index.php">Batal</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $departemen = $_POST['departemen'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];

        $update = mysqli_query($koneksi, "UPDATE table_karyawan SET
            nama='$nama',
            jabatan='$jabatan',
            departemen='$departemen',
            email='$email',
            telepon='$telepon'
            WHERE nip='$nip'");

        if ($update) {
            echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
        } else {
            echo "<p>Gagal update data!</p>";
        }
    }
    ?>
</body>
</html>
