<?php
class Tablet
{
    // Properti protected, hanya bisa diakses di dalam kelas ini dan kelas turunannya
    protected $merk;
    protected $camera;
    protected $memory;

    // Method untuk menetapkan detail tablet
    protected function setTablet($merk, $camera, $memory)
    {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function setTabletInfo($merk, $camera, $memory)
    {
        $this->setTablet($merk, $camera, $memory); // Akses dari dalam kelas
    }

    public function getTabletInfo()
    {
        return "Tablet Merk: $this->merk, Kamera: $this->camera MP, Memori: $this->memory GB";
    }
}

class Handphone extends Tablet
{
    // Properti tambahan untuk handphone
    protected $handphone_baru;

    // Method untuk membeli handphone
    public function beliHandphone($merk)
    {
        $this->handphone_baru = $merk;
        return "Membeli handphone baru dengan merk $this->merk.";  // Mengakses $merk dari Tablet
    }
}

// Membuat objek handphone
$hp = new Handphone();
$hp->setTabletInfo('iPhone', 15, 128); // Memanggil method public untuk menetapkan nilai
echo $hp->getTabletInfo();              // Output: Tablet Merk: iPhone, Kamera: 15 MP, Memori: 128 GB
echo "<br>";
echo $hp->beliHandphone('iPhone');      // Output: Membeli handphone baru dengan merk iPhone.
