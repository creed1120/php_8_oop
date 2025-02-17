<?php
 /***********************************************
 * Dice Roll Game
 * 
 ************************************************/

do {
    $diceRoll = rand(1, 6);
    echo "You rolled a $diceRoll\n";

    if (6 == $diceRoll) {
        echo "Congrats, you hit the Jackpot! 🎉";
        break;
    }

    echo "Roll Again (y/n)?";
    // command line input
    $rollAgain = trim(fgets(STDIN));

} while ('y' == $rollAgain);