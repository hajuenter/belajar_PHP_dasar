<?php

$menuPilih = isset($_GET['pilihan_menu']) ? $_GET['pilihan_menu'] : '';

switch ($menuPilih) {
    case 1:
        echo "Anda memilih Nasi Goreng.";
        break;
    case 2:
        echo "Anda memilih Ayam Bakar.";
        break;
    case 3:
        echo "Anda memilih Sate.";
        break;
    case 4:
        echo "Anda memilih Mie Goreng.";
        break;
    default:
        if ($menuPilih !== '') {
            echo "Pilihan tidak valid. Silakan pilih menu antara 1 dan 4.";
        }
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WKWKWK</title>
</head>

<body>
    <h6>NASI GORENG</h6>
    <h6>AYAM BAKAR</h6>
    <h6>SATE</h6>
    <h6>MIE GORENG</h6>
    <form action="" method="get">
        <select class="form-select w-100" id="pilihan_menu" name="pilihan_menu" required>
            <option value="">Pilih Menu</option>
            <option value="1">Nasi Goreng</option>
            <option value="2">Ayam Bakar</option>
            <option value="3">Sate</option>
            <option value="4">Mie Goreng</option>
        </select>
        <button type="submit">PILIH</button>
        <button type="button" onclick="window.location.href='pilihan.php';">RESET</button>
    </form>
</body>

</html>