<?php
/***********************
 * PHP Arrays
 ***********************/

$simpleArray = [1, 2, 3, 4, 5];
$associativeArray = [
  'name' => 'John', 
  'age' => 30, 
  'city' => 'New York'
];

// echo $simpleArray[0];
// echo $associativeArray['name'];

$simpleArray[] = 6;

// echo "<pre>";
// var_dump($simpleArray);
// echo "</pre>";

$matrix = [
    [1, 2, 3],
    [4, 5, 6]
];

// echo $matrix[1][1];

$fruits = ['apple', 'banana', 'orange'];

// echo "<pre>";
// var_dump(count($fruits));
// echo "</pre>";

sort($fruits);
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

rsort($fruits);
// echo "<pre>";
// var_dump($fruits);
// echo "</pre>";

// echo "<pre>";
// var_dump($associativeArray);
// echo "</pre>";

asort($associativeArray);
// echo "<pre>";
// var_dump($associativeArray);
// echo "</pre>";

ksort($associativeArray);
// echo "<pre>";
// var_dump($associativeArray);
// echo "</pre>";

$numbers = range(1, 5);
// echo "<pre>";
// var_dump($numbers);
// echo "</pre>";

$squared = array_map(
  // The operator "**" is for Exponentiation.
  fn($n) => $n ** 2, $numbers
);
// echo "<pre>";
// var_dump($squared);
// echo "</pre>";

$evenNumbers = array_filter(
    $numbers,
    fn($n) => $n % 2 == 0
  );
//   echo "<pre>";
//   var_dump($evenNumbers);
//   echo "</pre>";

  $oddNumbers = array_filter(
    $numbers,
    fn($n) => $n % 2 == 1
  );
//   echo "<pre>";
//   var_dump($oddNumbers);
//   echo "</pre>";

$sum = array_reduce(
    $numbers, 
    fn($carry, $n) => $carry + $n, 
    0
  );
//   echo "<pre>";
//   var_dump($sum);
//   echo "</pre>";

$moreNumbers = [0, ...$numbers, 6];
// echo "<pre>";
// var_dump($moreNumbers);
// echo "</pre>";

[$first, $second] = $fruits;
// echo "<pre>";
// var_dump($first, $second);
// echo "</pre>";

$keys = array_map(
    fn($key) => ucfirst($key), array_keys($associativeArray)
  );
  $values = array_values($associativeArray);
//   echo "<pre>";
//   var_dump($keys, $values);
//   echo "</pre>";

//  echo "<pre>";
//   var_dump(
//     array_key_exists('name', $associativeArray),
//     in_array('John', $associativeArray)
//   );
//  echo "</pre>";

$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];
// var_dump(
//   array_intersect($set1, $set2),
//   array_intersect($set2, $set1),
//   array_diff($set1, $set2),
//   array_diff($set2, $set1)
// );

 $fruitString = implode(', ', $fruits);
 $backToArray = explode(', ', $fruitString);
 asort($backToArray);
//  echo "<pre>";
//  var_dump($fruitString, $backToArray);
//  echo "</pre>";

 echo "<pre>";
//  var_dump(
//     array_unique(array_merge($set1, $set2)),
//     array_slice($set1, 1, 3),
//     array_merge($associativeArray, ['country' => 'DE']),
//     $associativeArray + ['county' => 'DE'],
//     [...$set1, ...$set2],
//     [...$associativeArray, ...['country' => 'DE']]
//   );
  echo "</pre>";

//   var_dump(
//     array_search('banana', $fruits)
//   );