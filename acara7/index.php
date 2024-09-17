<?php
include("class_lib.php");
?>

<?php
$stefan = new Person(); 
$jimy = new Person();   

$stefan->set_name("Stevannnn");
$jimy->set_name("Jimyyy");

echo "Sefan full name: " . $stefan->get_name() . "<br>";
echo "Jimy full name: " . $jimy->get_name();
?>
