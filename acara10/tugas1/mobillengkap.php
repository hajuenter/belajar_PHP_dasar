<?php
class mobilLengkap
{
    // Method untuk menyalakan TV
    public function nontonTV()
    {
        echo "TV dihidupkan.<br>";
        echo "TV Mencari Chanel...<br>";
        echo "TV Menampilkan gambar.<br>";
    }

    // Method untuk menghidupkan mobil
    public function hidupkanMobil()
    {
        echo "Mobil dihidupkan.<br>";
    }

    // Method untuk mematikan mobil
    public function matikanMobil()
    {
        echo "Mobil dimatikan.<br>";
    }

    // Method untuk mengubah gigi mobil
    public function ubahGigi($gigi)
    {
        echo "Gigi mobil diubah ke: Gigi $gigi.<br>";
    }
}
