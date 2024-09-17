<?php

$A = [
    [5, 14, 25],
    [1, 5, 16],
    [31, 12, 9]
];

$B = [
    [12, 21, 24],
    [3, 7, 21],
    [20, 17, 24]
];

$hasilPenjumlahan = [];

for ($i = 0; $i < count($A); $i++) {
    for ($j = 0; $j < count($A[$i]); $j++) {
        $hasilPenjumlahan[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

echo "Hasil Penjumlahan A + B: \n";
for ($i = 0; $i < count($hasilPenjumlahan); $i++) {
    echo implode(" ", $hasilPenjumlahan[$i]) . "\n";
}
