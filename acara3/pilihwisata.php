<?php

$wisataPilih = isset($_GET['pilihan_wisata']) ? $_GET['pilihan_wisata'] : '';

switch ($wisataPilih) {
    case 1:
        echo "Anda memilih Sedudoooo.";
        break;
    case 2:
        echo "Anda memilih Guri omahku.";
        break;
    case 3:
        echo "Anda memilih Roro Kuning.";
        break;
    case 4:
        echo "Anda memilih Kali Cangkringan.";
        break;
    default:
        if ($wisataPilih !== '') {
            echo "Pilihan tidak valid";
        }
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOI CUY</title>
</head>

<body>
    <form action="" method="get">
        <select class="form-select w-100" id="pilihan_wisata" name="pilihan_wisata" required>
            <option value="">Pilih Wisata</option>
            <option value="1">Sedudoooo</option>
            <option value="2">Guri Omahku</option>
            <option value="3">Roro Kuning</option>
            <option value="4">Kali Cangkringan</option>
        </select>
        <button type="submit">PILIH</button>
        <button type="button" onclick="window.location.href='pilihwisata.php';">RESET</button>
    </form>
</body>

</html>