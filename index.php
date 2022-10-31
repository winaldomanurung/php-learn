<?php

// OPERATORS

// string operator
$x = 'Hello';
$z = $x . ' World';
// or
$x .= ' World';
echo $x;
echo $z;
echo "<br>";

// comparison operators 
$x = 50;
$y = '50';

var_dump($x == $y); //membandingkan nilai yang telah di cast => true
echo "<br>";
var_dump($x != $y); //membandingkan nilai yang telah di cast => false
echo "<br>";
var_dump($x === $y); //membandingkan nilai yang belum di cast => false
echo "<br>";
var_dump($x !== $y); //membandingkan nilai yang belum di cast => true
echo "<br>";
var_dump($x <> $y); //sama seperti !=
echo "<br>";
var_dump($x <=> $y); //0 jika sama, -1 jika y lebih besar, 1 jika x lebih besar
echo "<br>";

/*
$x = 'Hello World';
$y = strpos ($x, 'H'); 
echo $y; //0

if($y == false){
  echo 'H not found'; //ini yang akan dijalankan, karena dalam loose comparison 0 == false merupakan true
} else {
  echo 'H found at index ' . $y;
}

if($y === false){
  echo 'H not found'; 
} else {
  echo 'H found at index ' . $y; //ini yang akan dijalankan, karena dalam strict comparison 0 === false merupakan false
}
*/
echo 'var_dump($x ?? $y) = ';
var_dump($x ?? $y); //sama dengan:
/*
$result = x ?? y
The value of $result is x if x exists, and is not NULL.
If x does not exist, or is NULL, the value of $x is y.
*/
echo "<br>";

echo 'var_dump($x ?: $y) = ';
var_dump($x ?: $y); //sama dengan:
/*
$result = expr1 ? expr2 : expr3	
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE
*/
echo "<br>";

$x = 'Hello World';
$y = strpos ($x, 'H'); 
$result = $y === false ? 'H not found' : 'H found at index ' . $y;
echo $result;
echo "<br>";

$x = null;
$y = $x ?? 'hello';

var_dump($y); //dia akan menjadi hello, karena x adalah null
//kalau x bukan null maka dia akan x