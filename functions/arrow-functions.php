<?php
// declare(strict_types=1);

/**
 * PHP Arrow Functions
 * 
 */

$numbersArray = [1, 2, 3, 4];
$multiplier = 3;

$squareTheArray = array_map(function ($n) use($multiplier) {
    return $n * $multiplier;
}, $numbersArray);

echo "Squared Function (Anonymous)";
echo "<pre>";
var_dump($squareTheArray);
echo "</pre>";

/**
 * Arrow function
 * (arrow functions inherit the scope of external variables)
 */
 $squareArrayFunction = array_map(
    fn ($n) => $n * $multiplier,
    $numbersArray
    // no "return" statement needed
);

 echo "Squared Function (Arrow fn)";
 echo "<pre>";
 var_dump($squareArrayFunction);
 echo "</pre>";