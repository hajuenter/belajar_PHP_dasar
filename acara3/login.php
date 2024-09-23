<?php

$validUsername = "bahrul";
$validPassword = "admin123";

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari input form
    $user = isset($_POST['user']) ? $_POST['user'] : '';
    $pass = isset($_POST['passw']) ? $_POST['passw'] : '';

    // Cek apakah input sesuai dengan username dan password yang valid
    if ($user === $validUsername && $pass === $validPassword) {

        header("Location: /belajar_php_dasar/acara3/index.php");
        exit;
    } else {

        echo "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Tugas</title>
</head>

<body>
    <form action="" method="post">
        <label for="user">Username</label>
        <input type="text" name="user" id="user" required>
        <br>
        <label for="passw">Password</label>
        <input type="password" name="passw" id="passw" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>