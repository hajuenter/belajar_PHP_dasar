<?php

function menentukan_bilangan_besar($a, $b)
{
    if ($a > $b) {
        return $a;
    } elseif ($b > $a) {
        return $b;
    } else {
        echo "nilai dari :" . $a . "dan" . $b . "sama";
    }
}

$bilangan1 = 100;
$bilangan2 = 150;

echo "Antara" . " " . $bilangan1 . " " . "dan" . " " . $bilangan2 . " " . "bilangan yang lebih besar adalah: " . menentukan_bilangan_besar($bilangan1, $bilangan2);
