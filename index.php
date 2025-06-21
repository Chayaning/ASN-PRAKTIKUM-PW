<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h2>Data Karyawan</h2>
    <a href="tambah.php">+ Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Departemen</th>
            <th>Email</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM table_karyawan");
        while ($row = mysqli_fetch_assoc($sql)) {
            echo "<tr>
                    <td>{$row['nip']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jabatan']}</td>
                    <td>{$row['departemen']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telepon']}</td>
                    <td>
                        <a href='edit.php?nip={$row['nip']}'>Edit</a> |
                        <a href='hapus.php?nip={$row['nip']}' onclick=\"return confirm('Yakin hapus?')\">Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
