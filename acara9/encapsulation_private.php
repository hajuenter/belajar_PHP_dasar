<?php
class Mobil
{
    private $merek;

    // Method untuk mengatur nilai
    function set_merek($new_merek)
    {
        $this->merek = $new_merek;
    }

    // Method untuk mengambil nilai
    function get_merek()
    {
        return $this->merek;
    }
}
?>

<?php
// objek gak ngaruh gedi cilik abjad e 
$mobil = new mobil();

// method set untuk menetapkan nilai properti
$mobil->set_merek('Suzuki');

// nilai properti melalui method get
echo "Merek Motor: " . $mobil->get_merek();

?>
