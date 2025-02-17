<?php
/***********************************************************
 * For loop - Countdown
 * 
 * (this PHP version of "for" loop only shows the actual
 * countdown when executed from the command line)
 * 
 ***********************************************************/

echo "Rocket Launch Liftoff!\n" . "<br>";

for ($i = 10; $i > 0; $i--) {
    echo "$i ...\n" . "<br>";

    if (1 == $i) {
        echo "Liftoff! 🚀\n" . "<br>";
    }
    sleep(1);
    
}