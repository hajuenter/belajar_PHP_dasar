<?php
$email = '';
$password = '';
$errorMessage = '';
$successMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['pas']) ? $_POST['pas'] : '';

    //hitung password gawe strlen
    if (strlen($password) < 8) {
        $errorMessage = "Password harus memiliki minimal 8 karakter.";
    } else {
        $successMessage = "Email: $email<br>Password: $password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar wkwkw</title>
</head>

<body>
    <form action="" method="post">
        <label for="user">Email</label>
        <input type="email" name="email" required>
        <br>
        <label for="passw">Password</label>
        <input type="password" name="pas" required>
        <br>
        <button type="submit">Daftar</button>
    </form>

    <?php if ($errorMessage): ?>
        <p style="color: red;"><?= $errorMessage; ?></p>
    <?php endif; ?>

    <?php if ($successMessage): ?>
        <div style="border: 1px solid green; padding: 10px; margin-top: 10px;">
            <?= $successMessage; ?>
        </div>
    <?php endif; ?>
</body>

</html>