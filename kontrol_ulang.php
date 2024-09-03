<?php
//percabangan if else
$nilai = 90;
echo "Contoh if else<br>";
if ($nilai > 80) {
    echo "Selamat anda mendapat grade A<br>";
} else {
    echo "Selamat anda belum mendapat grade A<br>";
}

// percabangan switch
echo "Contoh switch<br>";
switch ($nilai) {
    case 100:
        echo "Nilai yang di pilih 100<br>";
        break;
    case 90:
        echo "Nilai yang di pilih 90<br>";
        break;
    default:
        echo "Kosong";
        break;
}

//perulangan for
echo "Contoh for<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Loping for ke : " . $i . "<br>";
}

//perulangan while
echo "Contoh while<br>";
$j = 1;
while ($j <= 5) {
    echo "Loping while ke : " . $j . "<br>";
    $j++;
}
