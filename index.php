<?php

// DATA TYPES & TYPE CASTING

# 4 Scalar Types
  # boolean
  $completed = true;
  # int
  $score = 75;
  # float
  $price = 8.99;
  # string
  $greeting = "Hello, Aldo";

  echo $completed . '<br />';
  echo $score . '<br />';  
  echo $price . '<br />';
  echo $greeting . '<br />';

# 4 Compound Types
  # array
  $companies = [1, 2, 3, 4, 0.5, -2, true, 'a'];
  # object
  # callable
  # iterable

  print_r($companies);

# 2 Special Types
  # resource
  # null


// to check type
echo gettype($score);
echo '<br />';
var_dump($completed); //PHP will define the type in the runtime
echo '<br />';

declare(strict_types=1);

// type hinting
function sum(int $x, int $y){
  var_dump($x, $y);
  echo '<br />';
  return $x + $y;
}

echo sum(2,3); // 5
echo '<br />';
echo sum(2,'3'); // 5
echo '<br />';