<?php

$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $v) {

    echo "Value is $v <br>";
}

echo "<hr>";

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach ($numbers as $b) {
    echo "Value is $b <br>";
}
