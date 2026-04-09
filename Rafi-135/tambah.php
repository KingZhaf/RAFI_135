<?php
include 'sambung.php';

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama_mhs'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['kode_prodi'];

    mysqli_query($koneksi, 
        "INSERT INTO mahasiswa (nim, nama_mhs, jenis_kelamin, kode_prodi)
         VALUES ('$nim', '$nama', '$jk', '$prodi')"
    );

    header("Location: index.php");
}
?>

<h2>Tambah Data Mahasiswa</h2>

<form method="post">
    NIM: <input type="text" name="nim" required><br><br>
    Nama Mahasiswa: <input type="text" name="nama_mhs" required><br><br>
    Jenis Kelamin:
    <select name="jenis_kelamin">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br><br>
    Kode Prodi: <input type="text" name="kode_prodi" required><br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>
