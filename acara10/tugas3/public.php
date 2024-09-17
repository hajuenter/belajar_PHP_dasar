<?php
class Tablet
{
    // Semua properti dan method bersifat public
    public $merk;
    public $camera;
    public $memory;

    // Method untuk menampilkan detail tablet
    public function setTablet($merk, $camera, $memory)
    {
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
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

    // Method untuk beli handphone
    public function beliHandphone()
    {
        return "Membeli handphone baru dengan merk $this->merk.";
    }
}

// Membuat objek handphone
$hp = new Handphone();
$hp->setTablet('Samsung', 12, 64);  // Akses metode dari kelas induk
echo $hp->getTabletInfo();           // Output: Tablet Merk: Samsung, Kamera: 12 MP, Memori: 64 GB
echo "<br>";
echo $hp->beliHandphone();           // Output: Membeli handphone baru dengan merk Samsung.
