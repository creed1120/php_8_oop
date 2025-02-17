<?php
/***********************************************************************
 * JS Countdown script
 * 
 * (Need to use Javascript "setTimeout" function to actually show the
 *  countdown on screen)
 * 
 **********************************************************************/
echo '
    <script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            function countdown(count) {
                if (count > 0) {
                    document.getElementById("output").innerHTML = count;
                    setTimeout(() => {
                    countdown(count - 1);
                    }, 1000); // Wait 1 second (1000 milliseconds)
                } else {
                    document.getElementById("output").innerHTML = "Blast off! 🚀";
                }
            }
            // Start the countdown from 10
            countdown(10);
        });
    </script>
';
