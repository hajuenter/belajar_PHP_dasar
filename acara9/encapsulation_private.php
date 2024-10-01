<?php

// Private: Properti hanya bisa diakses di dalam kelas itu sendiri, tidak di kelas turunan.
class Mobil
{
    private $merek;

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
        // Tidak bisa mengakses properti 'merek' karena 'private'
        // return "Merek Sedan: " . $this->merek; // Akan menghasilkan error
        return "Tidak bisa mengakses merek, karena private.";
    }
}

$mobil = new Sedan();
$mobil->set_merek('Toyota');
echo $mobil->tampilkanMerek(); // Output: Tidak bisa mengakses merek, karena private.
