<?php
 /***********************************************
 * Guess Password Game
 * 
 * (need to run from command line since we are 
 * using the "fgets(STDIN)" function)
 * 
 ************************************************/
 $secret = "magic";
 $attempts = 0;
 $maxAttempts = 5;

 while ($attempts < $maxAttempts) {
    echo "Guess the password: ";

    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess == $secret) {
        echo "Congrats! You have unlocked the treasure 💎\n";
        break;
    } elseif ($attempts == $maxAttempts) {
        echo "Sorry, you are out of attempts. Treasure is sitll locked 🔐\n";

    } else {
        echo "Wrong answer, you have: " . $maxAttempts - $attempts . " guesses left.\n";
    }
 }