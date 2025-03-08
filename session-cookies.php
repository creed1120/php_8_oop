<?php
 /************************
  * Sessions & Cookies
  ************************/

// Checking if COOKIE exists
$hasCookie = isset( $_COOKIE['user'] );

if ( !$hasCookie ) {
    $welcomeMessage = "Welcome back, User!";
} else {
    $welcomeMessage = "Welcome back, " . htmlspecialchars( $_COOKIE['user'] );
}