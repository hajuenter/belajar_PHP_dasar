<?php
echo '<h1>HELLO WORLD</h1>';
echo "<h1>Saya mau belajar php dasar</h1>";
$nama = "Bahrul";
$lahir = '11-11-2004';
$angka1 = 100;
$angka2 = 60;
$perbandingan = true;
$kumpulanhobi = array('Sepak bola', 'Badminton', 'Renang', 'Basket', 'Volly');
echo '<br>Nama saya adalah'. ' '. $nama;
echo '<br>Umur saya adalah'. ' '. $lahir;
echo '<br>Hobi saya adalah'.' '. $kumpulanhobi[0].', '. $kumpulanhobi[1];
echo '<br>Jumlah angka dari'. ' '.$angka1 .' '.'dan'.' '. $angka2. ' '.'adalah'. ' '. $angka1 + $angka2;

echo "<hr>";
echo "<hr>";
//belajar operator
//perbedaan echo '' dan "" adalah kalau "" yang di ambil dari varibel langsung nilainya
echo "<br>hasil dari $angka1 + $angka2 adalah". " ". $angka1+$angka2;
echo "<br>hasil dari $angka1 - $angka2 adalah". " ". $angka1-$angka2;
echo "<br>hasil dari $angka1 x $angka2 adalah". " ". $angka1*$angka2;
echo "<br>hasil dari $angka1 : $angka2 adalah". " ". $angka1/$angka2;
echo "<br>hasil dari $angka1 % $angka2 adalah". " ". $angka1%$angka2;

echo "<hr>";
echo "<hr>";

//belajar percabangan if else dan switch case
$cabang1 = "100";
$cabang2 = "350";
if($cabang1 > $cabang2) {
    echo "Cabang satu lebih besar";
}else {
    echo "Cabang satu kurang besar";
} // hasil cabang satu kurang besar karena cabang1 adalah 100 dan cabang2 adalah 300

echo "<hr>";
if($cabang2 > 400) {
    echo "Benar";
}else if($cabang2 == 350) {
    echo "Kurang benar";
}else {
    echo "Cukup";
}// hasil kurang benar karena nilai dari cabang2 adalah 350

echo "<hr>";
echo "<hr>";
$hewan = "singa";
switch($hewan) {
    case 'singa' :
        echo "nilai benar";
        break;
    case 'harimau' :
        echo "nilai salah";
        break;
    default :
        echo "hahaha";
        break;
}// hasil nilai benar karena nilai dari cabang1 adalah 100

echo "<hr>";
echo "<hr>";
//belajar looping
//for
for ($i=3; $i < 10 ; $i++) { 
   echo "for $i<br>";
}
// while
$perulangan_while = "1";
while ($perulangan_while <= 5) {
    echo "while $perulangan_while<br>";
    $perulangan_while++;
}
//do while
$dowhile = "5";
do {
    echo "do while $dowhile<br>";
    $dowhile++;
} while ($dowhile <= 10);

//for each
$forarray = array("dodo", "messi", "boni", "nita");
foreach ($forarray as $key => $value) {
    echo "nomor index array dari $key isinya adalah $value<br>";
}
echo "<hr>";
foreach ($forarray as $key => $value) {
    echo "nomor index array dari". " ". ( $key + 3). " isinya adalah $value<br>";
}
//method $_GET dan $_POST  

?>