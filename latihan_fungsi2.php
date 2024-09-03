<?php
$kalender = getdate();
$hari = str_pad($kalender['mday'], 2, '0', STR_PAD_LEFT);
$bulan = str_pad($kalender['mon'], 2, '0', STR_PAD_LEFT);
$tahun = $kalender['year'];

$tanggal_format = "$hari-$bulan-$tahun";
echo "Saat ini adalah :" . " " . $tanggal_format;
