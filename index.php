<?php

// INTEGER
/* 
nilai max dari integer tergantung dari platformnya: 32 bit beda dengan 64 bit
kita bisa cek denan PHP_INT_MIN dan PHP_INT_MAX
*/

echo PHP_INT_MAX . "<br>\n";
echo PHP_INT_MIN . "<br>\n";

// integer can be represented in: 
// decimal or base 10:
$x = 5;

// hexadecimal or base 16 - diawali 0x:
$y = 0x2A;

// octal or base 8 - diawali 0:
$z = 055;

// binary or base 2 - diawali 0b:
$b = 0b110;

echo $x . "<br>\n";
echo $y . "<br>\n";
echo $z . "<br>\n";
echo $b . "<br>\n";

// ketika kita membuat bilangan yang melebihi MAX integer, maka dia akan berubah menjadi float
$max = PHP_INT_MAX + 1; //ini akan jadi float

// cara mengubah suatu variable ke integer adalah dengan menggunakan casting:
$cast = (int) true;
echo $cast . "<br>\n";


// kita bisa gunakan _ untuk readibility
$mill = 200_000_000;
echo $mill;