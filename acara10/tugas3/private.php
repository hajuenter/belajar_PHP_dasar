<?php
class Tablet
{
    // Properti private, hanya bisa diakses di dalam kelas ini saja
    private $merk;
    private $camera;
    private $memory;

    // Method untuk menetapkan detail tablet
    private function setTablet($merk, $camera, $memory)
    {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function setTabletInfo($merk, $camera, $memory)
    {
        $this->setTablet($merk, $camera, $memory);  // Akses method private di dalam kelas
    }

    public function getTabletInfo()
    {
        return "Tablet Merk: $this->merk, Kamera: $this->camera MP, Memori: $this->memory GB";
    }
}

class Handphone extends Tablet
{
    // Properti tambahan untuk handphone
    public $handphone_baru;

    // Method untuk membeli handphone
    public function beliHandphone($merk)
    {
        $this->handphone_baru = $merk;
        return "Membeli handphone baru.";  // Tidak bisa mengakses $merk dari Tablet karena private
    }
}

// Membuat objek handphone
$hp = new Handphone();
$hp->setTabletInfo('Oppo', 48, 256);   // Memanggil method public untuk menetapkan nilai
echo $hp->getTabletInfo();             // Output: Tablet Merk: Oppo, Kamera: 48 MP, Memori: 256 GB
echo "<br>";
echo $hp->beliHandphone('Oppo');       // Output: Membeli handphone baru.
