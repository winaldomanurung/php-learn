<?php

// BOOLEAN
/*
 integers: 0 & -0 => false
 floats: 0.0 & -0.0 => false
 string: '' & '0' => false
 array: [] => false
 null: false
*/

/*
anything else will be true:
'5', 5, [5], 'false'
*/

$isComplete = true;
$isComplete2 = (string) true;
var_dump($isComplete); //bool(true)
var_dump($isComplete2); //string(1) "1"

if($isComplete){
  echo 'True';
} else {
  echo 'False';
}

echo $isComplete;
/*
if true, akan print 1
if false, eakan print empty string
*/

echo (string) $isComplete;

echo (is_bool($isComplete));
var_dump (is_bool($isComplete));
