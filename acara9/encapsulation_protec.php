<?php

// Protected: Properti bisa diakses di dalam kelas dan di kelas turunan.
class Mobil
{
    protected $merek;

    // Method untuk mengatur nilai properti 'merek'
    function set_merek($new_merek)
    {
        $this->merek = $new_merek;
    }

    // Method untuk mengambil nilai properti 'merek'
    function get_merek()
    {
        return $this->merek;
    }
}

// Kelas Turunan
class Sedan extends Mobil
{
    public function tampilkanMerek()
    {
        // Bisa mengakses properti 'merek' karena 'protected'
        return "Merek Sedan: " . $this->merek;
    }
}

$mobil = new Sedan();
$mobil->set_merek('Toyota');
echo $mobil->tampilkanMerek(); // Output: Merek Sedan: Toyota
