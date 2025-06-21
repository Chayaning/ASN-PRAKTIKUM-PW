<?php
include 'koneksi.php';

$nip = $_GET['nip'];
$hapus = mysqli_query($koneksi, "DELETE FROM table_karyawan WHERE nip='$nip'");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "<p>Gagal menghapus data!</p>";
}
?>
