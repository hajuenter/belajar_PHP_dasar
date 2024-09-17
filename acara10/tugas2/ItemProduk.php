<?php
class ItemProduk
{
    // Properti umum yang dimiliki oleh semua item
    public $ukuran;
    public $warna;
    public $nama;

    // Method untuk menetapkan ukuran produk
    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }

    // Method untuk menetapkan warna produk
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Method untuk menetapkan nama produk
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Method untuk menampilkan informasi umum produk
    public function getInfoProduk()
    {
        return "Nama Produk: $this->nama, Ukuran: $this->ukuran, Warna: $this->warna";
    }
}
