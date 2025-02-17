<?php
/********************************
 * Fizz counter
 * 
 * using the modulo % operator
 * (divisible by 3 should = 0)
 * 
 ********************************/
$counter = 0;
$maxNumber = 7;

while ($counter < $maxNumber) {
    $counter++;
    if ($counter % 3 == 0) {
        echo "Fizz!" . "<br>";
    } else {
        echo $counter . "<br>";
    }
}