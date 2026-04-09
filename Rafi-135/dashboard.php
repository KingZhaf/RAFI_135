<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<a href="#">Beranda</a>
<a href="index.php">Data Mahasiswa</a>
<a href="logout.php">Logout</a>

<h2>Selamat Datang</h2>
<p>Username: <?= $_SESSION['username']; ?></p>



