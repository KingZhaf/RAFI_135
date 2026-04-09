<?php
include 'sambung.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {
    mysqli_query($koneksi,
        "UPDATE mahasiswa SET
         nim='$_POST[nim]',
         nama_mhs='$_POST[nama_mhs]',
         jenis_kelamin='$_POST[jenis_kelamin]',
         kode_prodi='$_POST[kode_prodi]'
         WHERE id='$id'"
    );

    header("Location: index.php");
}


?>

<h2>Edit Data Mahasiswa</h2>

<form method="post">
    NIM: <input type="text" name="nim" value="<?= $row['nim'] ?>"><br><br>
    Nama Mahasiswa: <input type="text" name="nama_mhs" value="<?= $row['nama_mhs'] ?>"><br><br>
    Jenis Kelamin:
    <select name="jenis_kelamin">
        <option value="L" <?= $row['jenis_kelamin']=='L'?'selected':'' ?>>Laki-laki</option>
        <option value="P" <?= $row['jenis_kelamin']=='P'?'selected':'' ?>>Perempuan</option>
    </select><br><br>
    Kode Prodi: <input type="text" name="kode_prodi" value="<?= $row['kode_prodi'] ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>
