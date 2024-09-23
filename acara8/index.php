<?php
include("kalkulator.php");

// Inisiasi objek 
$kalkulator = new Kalkulator();

$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operasi = $_POST['operation'];

    // Panggil metode sesuai dengan operasi yang dipilih
    switch ($operasi) {
        case 'tambah':
            $hasil = $kalkulator->tambah($num1, $num2);
            break;
        case 'kurang':
            $hasil = $kalkulator->kurang($num1, $num2);
            break;
        case 'kali':
            $hasil = $kalkulator->kali($num1, $num2);
            break;
        case 'bagi':
            $hasil = $kalkulator->bagi($num1, $num2);
            break;
        default:
            $hasil = "Error woiiii.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Kalkulator Sederhana</title>
</head>

<body>
    <h1>Kalkulator</h1>
    <form method="POST" action="">
        <label for="num1">Nomer 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>

        <label for="num2">Nomer 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Pilih operasi:</label>
        <select name="operation" id="operation">
            <option value="tambah">Tambah</option>
            <option value="kurang">Kurang</option>
            <option value="kali">Kali</option>
            <option value="bagi">Bagi</option>
        </select><br><br>

        <button type="submit">Hasil</button>
    </form>

    <?php
    if ($hasil !== "") {
        echo "<h2>hasil: $hasil</h2>";
    }
    ?>
</body>

</html>