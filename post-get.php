<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar method</title>
    <style>
        .show-hide-btn {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post">
    Masukkan nama : <br>
    <input type="text" name="namainput"><br>
    Masukkan email : <br>
    <input type="email" name="emailinput"><br>
    Masukkan password : <br>
    <input type="password" name="passwordinput" id="password" required>
    <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()">Tampilkan Password<br>
    <button type="submit" name="btnsubmit">kirim</button>
    <button type="reset" name="btnreset">reset</button>
    </form>
    <?php
    if(isset($_POST['namainput'])) {
    echo "Nama adalah". " " .$_POST['namainput']. "<br>";
    echo "Email adalah". " " .$_POST['emailinput']. "<br>";
    }
    ?>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var showPassword = document.getElementById("showPassword");
            if (showPassword.checked) {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>