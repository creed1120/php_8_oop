<?php
// declare (strict_types=1);

/********************************
 * Variable Scopes
 * 
 ********************************/

 // Globbal Scope
 $superHero = "Superman";

 function revealIdentity() {

    // in order to reference a variable outside the function is to add "global" key word inside the function
    global $superHero;

    $message = "real name is Clark Kent.\n" . "<br>";

    return "$superHero, $message ";
 }

 echo revealIdentity();
 // this will throw a warning (Warning: Undefined variable $message) because the variable is in "Global" scope
 echo $message . "<br>";


 function countVisitors() {

    // "static" preserves the state of the variable in the local scope
    static $visitorCount = 0;

    $visitorCount++;
    echo "Vistor #$visitorCount has arrived!" . "<br>";
 }

 countVisitors();
 countVisitors();
 countVisitors();

 /**
  * Example of output with "static" keyword
  * Vistor #1 has arrived!
  * Vistor #2 has arrived!
  * Vistor #3 has arrived!
  *
  * Example of output without "static" keyword
  * Vistor #1 has arrived!
  * Vistor #1 has arrived!
  * Vistor #1 has arrived!
  */