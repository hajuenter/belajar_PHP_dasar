<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil pendaftaran</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST['inputname']; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $_POST['inputemail']; ?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td><?php echo $_POST['jenis_kelamin']; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><?php echo $_POST['inputalamat']; ?></td>
        </tr>
        </tr>
        <tr>
            <td></td>
            <td><a href="form.php">Kembali</a></td>
        </tr>
    </table>
</body>
</html>