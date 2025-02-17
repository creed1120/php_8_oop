<?php
declare (strict_types=1);

/****************************************************************
 * PHP Variadic Functions
 * (using the "..." to unpack unlimited parameters as an array)
 ****************************************************************/

 function sum(int ...$numbers) {
    echo "<pre>";
    $sum = 0;
    var_dump($numbers);

    echo "<br>";

    foreach($numbers as $number) {
        // $sum = $sum + $number;
        $sum += $number;
    }
    return $sum;
 }
 var_dump(sum(20, 22, 22, 19, 50));

 echo "<hr>";

 function introduceTeam(string $teamName, string ...$members): void {

    echo "<b>The var_dump</b>" . "<br>";
    var_dump($members);

    echo "<h2>". $teamName ."</h2>" . "<br>";
    echo "Members: <b>" . implode(", ", $members) ."</b>" . "\n";
    echo "<br>";
 }
 introduceTeam("A Team", "Alice", "Roger", "Ronald", "Mary");

 echo "<hr>";
 
 $membersArray = ["Bobby", "Tammy", "Ricky"];
 introduceTeam("B Team", ...$membersArray);