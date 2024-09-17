<?php
// Definisi kelas 'person'
class person
{
    // Properti untuk menyimpan nama orang, dengan akses publik
    public $name;

    // Fungsi untuk menetapkan nilai properti 'name'
    function set_name($new_name)
    {
        // Mengubah nilai properti 'name' menjadi nilai yang diberikan pada $new_name
        $this->name = $new_name;
    }

    // Fungsi untuk mengambil nilai properti 'name'
    function get_name()
    {
        // Mengembalikan nilai dari properti 'name'
        return $this->name;
    }
}
?>

<?php
// Membuat objek baru dari kelas 'person'
$person1 = new person();

//menetapkan nilai properti 'name' menjadi 'HAHAHA'
// Di sini, properti 'name' bisa diakses langsung karena properti ini bersifat 'public'
echo "Hai" . $person1->name = 'HAHAHA';

// Membuat garis pemisah di tampilan HTML
echo "<hr>";

// Memanggil fungsi 'get_name' untuk mengambil dan menampilkan nilai dari properti 'name'
echo $person1->get_name();
?>
