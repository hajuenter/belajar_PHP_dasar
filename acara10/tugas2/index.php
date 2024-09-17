<?php
// Include semua class
include('ItemProduk.php');
include('Topi.php');
include('Celana.php');
include('Baju.php');

// Membuat objek dari class Topi
$topi = new Topi();
$topi->setNama('Topi Fedora');
$topi->setUkuran('M');
$topi->setWarna('Hitam');
$topi->setModel('Fedora');
echo $topi->getInfoTopi(); // Menampilkan informasi Topi

echo "<br><br>";

// Membuat objek dari class Celana
$celana = new Celana();
$celana->setNama('Celana Jeans');
$celana->setUkuran('32');
$celana->setWarna('Biru');
$celana->setTipe('Jeans');
$celana->setModel('Skinny');
echo $celana->getInfoCelana(); // Menampilkan informasi Celana

echo "<br><br>";

// Membuat objek dari class Baju
$baju = new Baju();
$baju->setNama('Kemeja Polos');
$baju->setUkuran('L');
$baju->setWarna('Putih');
$baju->setTipe('Kemeja');
echo $baju->getInfoBaju(); // Menampilkan informasi Baju
