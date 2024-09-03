<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>
<body>
    <form action="hasil_form.php" method="post">
        <h2>Masukkan data diri anda !!!</h2>
        <label for="">Nama :</label> <br>
        <input type="text" name="inputname"><br>
        <label for="">Email :</label> <br>
        <input type="email" name="inputemail"><br>
        <label for="">Jenis kelamin</label><br>
        <select name="jenis_kelamin" id=""><br>
            <option value="laki-laki">laki-laki</option>
            <option value="perempuan">perempuan</option>
        </select><br>
        <label for="">Alamat :</label><br>
        <textarea name="inputalamat" id=""></textarea><br>
        <button type="submit">KIRIM</button>
        <button type="reset">RESET</button>

    </form>
</body>
</html>