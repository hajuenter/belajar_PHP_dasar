<?php
// Matriks A (3x3)
// Inisialisasi matriks A dengan elemen-elemen tertentu
$matriksA = [
    [1, 1, 1], // Baris pertama
    [2, 2, 2], // Baris kedua
    [3, 3, 3]  // Baris ketiga
];

// Matriks B (3x3)
// Inisialisasi matriks B dengan elemen-elemen tertentu
$matriksB = [
    [3, 3, 3], // Baris pertama
    [2, 2, 2], // Baris kedua
    [1, 1, 1]  // Baris ketiga
];

// Matriks hasil penjumlahan (3x3)
// Deklarasi matriks C sebagai array kosong yang akan menyimpan hasil penjumlahan matriks A dan B
$matriksC = [];

// Proses penjumlahan matriks
// Looping melalui setiap elemen matriks A dan B untuk melakukan penjumlahan
for ($i = 0; $i < 3; $i++) { // Loop untuk baris
    for ($j = 0; $j < 3; $j++) { // Loop untuk kolom
        // Menjumlahkan elemen yang bersesuaian dari matriks A dan B
        // dan menyimpannya ke dalam matriks C pada posisi yang sama
        $matriksC[$i][$j] = $matriksA[$i][$j] + $matriksB[$i][$j];
    }
}

// Menampilkan hasil penjumlahan matriks
echo "Hasil penjumlahan matriks A dan B adalah:<br>";
for ($i = 0; $i < 3; $i++) { // Loop untuk baris
    for ($j = 0; $j < 3; $j++) { // Loop untuk kolom
        // Menampilkan elemen dari matriks C yang merupakan hasil penjumlahan
        echo $matriksC[$i][$j] . " "; // Elemen dipisahkan dengan spasi
    }
    echo "<br>"; // Pindah ke baris berikutnya setelah mencetak satu baris
}
?>
