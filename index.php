<?php

// OPERATORS II

// error control operator
// kita gunakan untuk suppress error
//$x = file('foo.txt'); //menghasilkan error
$x = @file('foo.txt'); //tidak menghasilkan error => not recommended

// increment/decrement operator
$y = 5;
echo $y++; //output 5, namun bts menjadi 6
echo ++$y; //output 6 dan bts menjadi 6

// logical operator (&&, ||, !, and, or, xor)
// xor = The return value will only be true if one of the statements is true and the other one is false.
$a = true;
$b = false;

var_dump($x && $y);
echo '<br>';
var_dump($x and $y);
echo '<br>';
var_dump($x xor $y);
echo '<br>';

$c = $a && $b; 
$d = $a and $b; 
var_dump($c); //false => karena satu salah dan satu benar
echo '<br>';
var_dump($d); //true => karena $d = $a adalah benar
echo '<br>';
//precedence operator => the assignment operator && has higher precedence than the AND operator

// short circuiting in logical operator
var_dump($a || $b); //$b disini tidak disentuh karena $a = true saja sudah memastikan dia akan true
echo '<br>';

function hello(){
  echo 'hello world';
  return false;
}
var_dump($a || hello()); //hello tidak dijalankan
echo '<br>';
var_dump($a && hello()); //hello dijalankan
echo '<br>';

// bitwise operator (&, |, ^^ , ~, <<, >>)
$x = 6;
$y = 3;

var_dump($x & $y); //2
echo '<br>';
// $x = 6 => 110
// & => return 1 if both of them are 1
// $y = 3 => 011
//    = 2 => 010

var_dump($x | $y); //7
echo '<br>';
// $x = 6 => 110
// | => return 1 if one of them are 1
// $y = 3 => 011
//    = 7 => 111

var_dump($x ^ $y); //5
echo '<br>';
// $x = 6 => 110
// ^ => return 1 if one of them are 1, jika keduanya 1 maka jadi 0
// $y = 3 => 011
//    = 5 => 101

var_dump(~$x & $y); //1
echo '<br>';
// $x = 6 => 110
// ~ => flip the bits
//~$x = 6 => 001
// &
// $y = 3 => 011
//    = 1 => 001

var_dump($x << $y); //48
echo '<br>';
// $x = 6 => 110
// << => shift bits to the left (multiply by 2)
// $y = 3 => sebanyak 3x
//    = 48 => 110000
// sama aja dengan 6 kali 2 sebanyak 3x

var_dump($x >> $y); //0
echo '<br>';
// $x = 6 => 110
// << => shift bits to the right (multiply by 2)
// $y = 3 => sebanyak 3x
//    = 0 => 
