<?php
// Fungsi untuk menampilkan tanggal, bulan, dan tahun saat ini dengan format 'd-F-Y'
function tampilkanTanggalSekarang()
{
    // Menggunakan fungsi date() untuk mendapatkan tanggal saat ini dalam format 'd-F-Y'
    $tanggal = date('d-F-Y');

    // Mengembalikan tanggal yang telah diformat
    return $tanggal;
}

// Memanggil fungsi dan menampilkan hasilnya
echo "Saat ini adalah : " . " " . tampilkanTanggalSekarang();
