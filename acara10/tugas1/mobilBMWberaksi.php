<?php
class MobilBMWberaksi
{
    // Method untuk menjalankan aksi-aksi pada MobilBMW
    public function nontonTv(MobilBMW $mobil)
    {
        $mobil->nontonTV(); // Panggil method nontonTV dari class MobilBMW
    }

    public function hidupkanMobil(MobilBMW $mobil)
    {
        $mobil->hidupkanMobil(); // Panggil method hidupkanMobil dari class MobilBMW
    }

    public function matikanMobil(MobilBMW $mobil)
    {
        $mobil->matikanMobil(); // Panggil method matikanMobil dari class MobilBMW
    }

    public function ubahGigi(MobilBMW $mobil, $gigi)
    {
        $mobil->ubahGigi($gigi); // Panggil method ubahGigi dari class MobilBMW
    }
}
