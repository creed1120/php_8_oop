<?php
/********************************
 * Count Items in basket
 * 
 ********************************/

 $basket = [
    "Apples" => 3,
    "Bananas" => 4
 ];

 $total = 0;

 foreach ($basket as $item => $quantity) {
    echo "$item: $quantity\n" . "<br>";

    $total += $quantity;
 }

 echo "Total items: $total\n" . "<br>";