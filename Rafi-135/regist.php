<?php
include "sambung.php";

$message = "";

if (isset($_POST['regist'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if (mysqli_query($koneksi, $query)) {
        $message = "Registrasi berhasil!";
        header("Location: login.php");
    } else {
        $message = "Error: " . mysqli_error($koneksi);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Registrasi Mahasiswa</h2>
    <?php if ($message != "") { echo "<p>$message</p>"; } ?>
    <form method="POST" action="">
        username:<br>
        <input type="text" name="username" required><br><br>

        email:<br>
        <input type="text" name="email" required><br><br>

        password:<br>
        <input type="password" name="password" required><br><br>


        <button type="submit" name="regist">Register</button>
    </form>
    
    
</body>
</html>