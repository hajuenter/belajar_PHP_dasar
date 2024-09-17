<?php
class Kalkulator
{
    // Fungsi untuk penjumlahan
    public function tambah($a, $b)
    {
        return $a + $b;
    }

    // Fungsi untuk pengurangan
    public function kurang($a, $b)
    {
        return $a - $b;
    }

    // Fungsi untuk perkalian
    public function kali($a, $b)
    {
        return $a * $b;
    }

    // Fungsi untuk pembagian
    public function bagi($a, $b)
    {
        if ($b == 0) {
            return "Error: Tidak bisa nol.";
        } else {
            return $a / $b;
        }
    }
}
