<?php
// declare (strict_types=1);

/********************************
 * Anonymous Function
 * 
 ********************************/

 $greet = function ($name) {
    echo "Hello $name!";
 };
 echo $greet("Kyle");

 $numbers = [1, 2, 3];
 $squared = array_map(function ($n) {
    return $n * $n;
 }, $numbers);
 
 echo "<pre>";
 var_dump($squared);

 $message = "Bye";
 $greet2 = function ($name) use(&$message) {
    $message = $message . "!";
    echo "$message, $name!";
 };
 echo $greet2("Kyle") . "<br>";
 echo $message;