<?php
include 'sambung.php';

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th>Kode Prodi</th>
    </tr>

    <?php
    $no = 1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nim']; ?></td>
        <td><?php echo $data['nama_mhs']; ?></td>
        <td><?php echo $data['jenis_kelamin']; ?></td>
        <td><?php echo $data['kode_prodi']; ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
