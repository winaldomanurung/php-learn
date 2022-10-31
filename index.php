<?php

// FLOAT
$x = 14.5;
$y = 14.5e3;
$z = 14.5e-3;

echo $x . "<br>\n";
echo $y . "<br>\n";
echo $z . "<br>\n";

// sama sepertin INT, FLOAT ini juga memiliki MAX yang tergantung dengan platform
echo PHP_FLOAT_MAX . "<br>\n";
echo PHP_FLOAT_MIN . "<br>\n";

$a = floor((0.1 * 0.7) + 10); //akan menghasilkan 7
// hal ini disebabkan di dalam float, mereka tidak memiliki the exact representation as the binary number yang mana digunakan untuk storing float number. Nah ketika dia diconvert ke binary itulah dia loses some precision

// kita harus hati-hati dalam pembandingan float:
$x = 0.23;
$y = 1-0.77;

var_dump($x, $y);

if($x == $y){
  echo 'Yes';
} else {
  echo 'No'; //hasilnya adalah No
}

// kita bisa mendapatkan NAN ketika kita membuat operasi yang tidak bisa dikalkulasi
$z = log(-1);
echo $z;

// kita bisa mendapatkan INF ketika kita membuat operasi yang tidak melebihi batas MAX FLOAT
$z = PHP_FLOAT_MAX * 2;
echo $z;