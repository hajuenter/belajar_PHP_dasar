<?php
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
?>

<?php
// Membuat objek dari kelas 'Mobil'
$mobil = new Mobil();

// Method set untuk menetapkan nilai properti 'merek'
$mobil->set_merek('Suzuki');

// Mengambil nilai properti 'merek' melalui method get
echo "Merek Mobil: " . $mobil->get_merek();
?>
