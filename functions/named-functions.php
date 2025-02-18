<?php
declare(strict_types=1);

/***********************
 * PHP named functions
 * 
 ***********************/

function greetUser(string $name, string $greeting = "Hello", bool $shout = false ) {
    $message = "$greeting, $name";

    // if the 3rd argument "bool $shout" has a parameter value when called, then it will return the $message in ALL CAPS
    return $shout ? "<b>". strtoupper($message) ."</b>" : $message;
}

echo greetUser("Alice") . "<br>";
echo greetUser("Alice", "Greetings") . "<br>";
echo greetUser("Alice", "Hey", true) . "<br>";

echo "<br>";
// Named arguments
echo greetUser(name: "Alice", shout: false) . "<br>";