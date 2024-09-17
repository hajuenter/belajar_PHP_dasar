<?php
class Celana extends ItemProduk
{
    // Properti spesifik untuk Celana
    public $tipe;
    public $model;

    // Method untuk menetapkan tipe celana
    public function setTipe($tipe)
    {
        $this->tipe = $tipe;
    }

    // Method untuk menetapkan model celana
    public function setModel($model)
    {
        $this->model = $model;
    }

    // Method untuk menampilkan informasi spesifik celana
    public function getInfoCelana()
    {
        return $this->getInfoProduk() . ", Tipe: $this->tipe, Model: $this->model";
    }
}
