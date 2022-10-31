<?php

// NULL

// 1. null constant
$x = null;
echo $x; //akan menghasilkan empty string
var_dump($x); //akan menghasilkan NULL

// 2. something that has not been defined
var_dump($y);

// 3. explicit unset
$z = 123;
unset($z);
var_dump($z);