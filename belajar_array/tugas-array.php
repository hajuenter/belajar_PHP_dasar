<?php
// Matriks A (3x3)
$matriksA = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B (3x3)
$matriksB = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks hasil penjumlahan (3x3)
$matriksC = [];

// Proses penjumlahan matriks
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriksC[$i][$j] = $matriksA[$i][$j] + $matriksB[$i][$j];
    }
}

// Menampilkan hasil penjumlahan matriks
echo "Hasil penjumlahan matriks A dan B adalah:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriksC[$i][$j] . " ";
    }
    echo "<br>";
}
