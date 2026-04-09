<?php
include 'sambung.php';
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<h2>Data Mahasiswa</h2>
<a href="tambah.php">Tambah Data</a>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th>Kode Prodi</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nim'] ?></td>
        <td><?= $row['nama_mhs'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['kode_prodi'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="dashboard.php">Kembali</a>
