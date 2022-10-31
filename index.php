<?php

// ARRAY
$programmingLanguages = ['PHP', 'Java', 'Python'];
// or
// $programmingLanguages = array('PHP', 'Java', 'Python');


// using index (kita gabisa gunakan negative index)
echo $programmingLanguages[1];
// untuk mengecek apakah index exist
var_dump(isset($programmingLanguages[3])); //bool(false)

// mutate
$programmingLanguages[1] = 'C++';

// length of array
echo count($programmingLanguages);

// tambah element array di end of array
$programmingLanguages[] = 'Javascript';
// or
array_push($programmingLanguages, 'Go', 'C#');

// define our own custom key
$programmingLanguagesVersion = [
  'php' => '8.0',
  'python' => '3.9',
];

$programmingLanguagesVersion['go'] = '1.15';

// melihat content array
echo '<pre>';
var_dump($programmingLanguages);
echo '</pre>';

echo '<pre>';
print_r($programmingLanguagesVersion);
echo '</pre>';

// key name di dalam array di casting menjadi string
$array = [
  true => 'a',
  2 => 'b',
  4.8 => 'c',
  'd'
];

echo '<pre>';
var_dump($array);
echo '</pre>';

// remove element from array
// pop => meremove yang terakhir
echo array_pop($array);
echo '<pre>';
var_dump($array);
echo '</pre>';

// shift => meremove yang terakhir
echo array_shift($array);
echo '<pre>';
var_dump($array);
echo '</pre>';

// unset
unset($array[1]);
echo '<pre>';
var_dump($array);
echo '</pre>';

// casting
$x = 5;
var_dump((array) $x);

// mengecek apakah key exist
$array2 = ['a'=> 1, 'b' => null];
var_dump((array_key_exists('b', $array2))); //hanya mengecek ada atau tidak
var_dump(isset($array2['b'])); //mengecek ada atau tidak dan mengecek apakah valuenya null