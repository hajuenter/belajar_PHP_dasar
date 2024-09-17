<?php include("class_lib.php"); ?>
<?php
$stefan = new Person();
$jimmy = new Person;
$stefan->set_name("Stefan Mischook");
$jimmy->set_name("Nick Waddles");

echo "Stefan's full name: " . $stefan->name;
?>