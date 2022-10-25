<?php

// CONSTANT

$firstname = 'Winaldo';
$firstname = 'Satryadi';

// untuk membuat constant kita gunakan:

// CARA 1
// define('name', 'value') => case sensitive
// defined at run time
define('STATUS_PAID', 'paid');

// ketika reference ke constant kita ga perlu $
echo STATUS_PAID;

// ketika mau cek apakah constant sudah pernah dibuat:
echo defined('STATUS_PAID');

// CARA 2
// const name = value
// defined at compile time => gabisa digunakan di dalam control structure
const STATUS_PAID2 = 'paid';
echo STATUS_PAID2;

// CARA 3
// dynamic constant name
$paid = 'PAID3';
define('STATUS_' . $paid, 4);
echo STATUS_PAID3;

// CARA 4
// predefined constant
echo PHP_VERSION;

// CARA 5
// magic constant
echo __LINE__;


// VARIABLE VARIABLES
$foo = 'bar';
$$foo = 'baz'; //ini sama dengan $bar = 'baz'
echo $foo, $bar;