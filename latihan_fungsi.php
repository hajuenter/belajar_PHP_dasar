<?php

echo "Membuat fungsi<br>";

function berhasil()
{
    echo "selamat anda berhasil<br>";
};

function gagal()
{
    echo "Maaf anda gagal<br>";
};

$nilai = 90;

if ($nilai >= 70) {
    berhasil();
} else {
    gagal();
}
echo "<br>";

//fungsi dengan parameter
echo "Fungsi dengan parameter<br>";

function jumlah($a, $b)
{
    return $a + $b;
}
$nilai1 = 10;
$nilai2 = 15;

echo jumlah($nilai1, $nilai2);
echo "<br>";

$sekarang = getdate();
print_r($sekarang);


echo "<br>";
echo "Sekarang tanggal :" . " " . $sekarang["mday"];
