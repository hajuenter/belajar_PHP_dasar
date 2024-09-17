<?php
// Include semua class yang telah dibuat
include('mobillengkap.php');
include('mobilBMW.php');
include('mobilBMWberaksi.php');

// Membuat objek MobilBMW
$mobilBMW = new MobilBMW();

// Membuat objek MobilBMWberaksi untuk melakukan aksi
$aksi = new MobilBMWberaksi();

// Jalankan method-method dari MobilBMW melalui MobilBMWberaksi
$aksi->nontonTv($mobilBMW);         // Nyalakan TV
$aksi->hidupkanMobil($mobilBMW);    // Hidupkan mobil
$aksi->ubahGigi($mobilBMW, 3);      // Ubah gigi ke-3
$aksi->matikanMobil($mobilBMW);     // Matikan mobil
