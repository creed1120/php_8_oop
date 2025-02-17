<?php
declare (strict_types=1);

/********************************
 * PHP Functions
 * 
 ********************************/

 function greet(string $name, string $lname): string {
    return "Hello, <b class='h5'>$name, $lname</b>" . "<br>";
 }
 echo greet("Nathaniel", "Robberson");


 function greetWithDay(string $name, string $timeOfDay = "day"): string {
    return "Good $timeOfDay $name!" . "<br>";
 }
 echo greetWithDay("Bobby");
 echo greetWithDay("Alice", "Morning");

 
 function add(int|float $a, int|float $b) {
    return "<b class='h5'>". $a + $b ."</b>";
 }
 echo add(3.73, 9.322);