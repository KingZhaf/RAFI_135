<?php
session_start();

// username & password (hardcode untuk belajar)

$username = $_POST['email'];
$password = $_POST['password'];

if ($username == $username_benar && $password == $password_benar) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    echo "Login gagal! <a href='index.php'>Coba lagi</a>";
}
?>
