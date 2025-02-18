<?php
/***********************
 * PHP strings
 ***********************/

 /**
  * Single & Double Quotes
  */
 $name = "David";
 echo 'Hello, $name!\n' . "<br>";
 // interpolation
 echo "Hello, $name!\n" . "<br>";

echo "<br>";

/**
 * Sting Manipulation
 */
$str = "Hello, World!";
$str .= " How are you?";

echo "$str\n" . "<br>";
echo "$str[0]" . "<br>";

echo substr($str, 0, 5) . "<br>";

/**
 * String Search
 */
$haystack = "The Quick Brown Fox";
$positon = strpos($haystack, 'Quick');

var_dump($positon);
echo "<br>";
var_dump(str_replace("Quick", "Lazy", $haystack));

/**
 * Regular Expressions
 */
preg_match_all('/\w{5}/', $haystack, $matches);
echo "<pre>";
var_dump($matches);
echo "</pre>";

/**
 * String Formatting
 */
$name = "Alice";
$age = 30;

printf("%s is %d years old.", $name, $age);

// use "explode()" function to convert .csv data to an array
$csv = "Apples,Oranges,Bananas";
$convertToArray = explode(',', $csv);
echo "<pre>";
// convert back to a String
var_dump($convertToArray, implode(", ", $convertToArray));
echo "</pre>";

/**
 * String Padding
 */
$padded = str_pad("Hello", 10, '-', STR_PAD_BOTH);
echo $padded . "<br>";

var_dump(trim("   Hello, World!    "));

/**
 * URL Encoding
 */
$html = "This is a 'Quoted' string with a <a href='https://someurl.com'>Link</a>";
echo htmlentities($html) . "<br>";

/**
 * % Modulo 
 */
// if modulo remainder is "1" then it is an odd#
var_dump(7 % 2 === 1); // output = true
echo "<br>";
// if modulo remainder is "0" then it is an even#
var_dump(7 % 2 === 0); // output = false

echo "<br>";
/**
 * Number Formatting
 */
$numberFormat = "1234.4533";
echo "Formatted: " . number_format($numberFormat, 2, '.', ',');
