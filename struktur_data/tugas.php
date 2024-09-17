<?php

$A = [5, 8, 23, 30, 41];
$B = [4, 6, 16, 20, 12];

$hasilPenjumlahan = [];
$hasilPengurangan = [];

for ($i = 0; $i < count($A); $i++) {
    $hasilPenjumlahan[] = $A[$i] + $B[$i];
    $hasilPengurangan[] = $A[$i] - $B[$i];
}

echo "Hasil Penjumlahan A + B: ";
echo implode(", ", $hasilPenjumlahan);
echo "\n";

echo "Hasil Pengurangan A - B: ";
echo implode(", ", $hasilPengurangan);
echo "\n";
