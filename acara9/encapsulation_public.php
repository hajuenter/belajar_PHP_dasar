<?php
// Definisi kelas 'Person'
class Person
{
    // Properti 'name' bersifat public, dapat diakses langsung
    public $name;
}

?>

<?php
// Membuat objek baru dari kelas 'Person'
$person1 = new Person();

// Menetapkan nilai properti 'name' secara langsung
$person1->name = 'Luffy';

// Mengambil dan menampilkan nilai properti 'name' secara langsung
echo "Raja bajak laut: " . $person1->name;
?>
