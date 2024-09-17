<?php
class Baju extends ItemProduk
{
    // Properti spesifik untuk Baju
    public $tipe;

    // Method untuk menetapkan tipe baju
    public function setTipe($tipe)
    {
        $this->tipe = $tipe;
    }

    // Method untuk menampilkan informasi spesifik baju
    public function getInfoBaju()
    {
        return $this->getInfoProduk() . ", Tipe: $this->tipe";
    }
}
