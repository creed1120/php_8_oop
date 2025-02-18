<?php
declare(strict_types=1);

/**************
 * PHP null
 * 
 **************/

 echo "<pre>";
 var_dump(
    null == null,
    null == false,
    null == 0,
    null == '',
    null == []
 );
 echo "<br>";

 // "?" before the strict type hint lets you use "null" as a parameter
 function greet(?string $name) {

    // null coalescing operater
    $name = $name ?? "Stranger";

    echo "Hello $name" . "<br>";
 }

 greet("Alice!");
 greet(null);

 var_dump(
    array_filter([1, null, "", 3])
 );