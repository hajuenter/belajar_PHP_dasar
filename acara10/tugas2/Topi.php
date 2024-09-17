<?php
class Topi extends ItemProduk
{
    // Properti spesifik untuk Topi
    public $model;

    // Method untuk menetapkan model topi
    public function setModel($model)
    {
        $this->model = $model;
    }

    // Method untuk menampilkan informasi spesifik topi
    public function getInfoTopi()
    {
        return $this->getInfoProduk() . ", Model: $this->model";
    }
}
