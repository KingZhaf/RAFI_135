<?php
session_start();
include "sambung.php";

$message = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, 
        "SELECT * FROM user 
         WHERE email = '$email' AND password = '$password'"
    );

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);

        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];

        header("Location: dashboard.php");
    } else {
        $message = "Username atau password salah";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Form Login</h2>

<?php if ($message != "") { echo "<p>$message</p>"; } ?>

<form method="POST">
    Username:<br>
    <input type="text" name="email" required><br><br>

    Password:<br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
    <a href="regist.php">Daftar</a>
</form>

</body>
</html>
