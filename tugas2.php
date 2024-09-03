<?php
// Menentukan grade nilai siswa berdasarkan nilai
function tentukanGrade($nilai)
{
    //percabangan  
    if ($nilai == 50) {
        return "D";
    } elseif ($nilai == 60) {
        return "C";
    } elseif ($nilai == 70) {
        return "B";
    } elseif ($nilai == 80) {
        return "A";
    } elseif ($nilai == 90 || $nilai == 100) {
        return "A+";
    } else {
        return "Nilai tidak valid";
    }
}

$siswa1 = 60;
$siswa2 = 70;
$siswa3 = 80;
$siswa4 = 90;
$siswa5 = 100;

echo "Grade siswa 1: " . tentukanGrade($siswa1) . "<br>";
echo "Grade siswa 2: " . tentukanGrade($siswa2) . "<br>";
echo "Grade siswa 3: " . tentukanGrade($siswa3) . "<br>";
echo "Grade siswa 4: " . tentukanGrade($siswa4) . "<br>";
echo "Grade siswa 5: " . tentukanGrade($siswa5) . "<br>";
