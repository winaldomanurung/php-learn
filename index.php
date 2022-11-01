<?php

// CONTROL STRUCTURE
$a = 100;
$b = 90;

// if
if ($a > $b)
  echo "a is bigger than b";


// if else
if ($a > $b) {
  echo "a is greater than b";
} else {
  echo "a is NOT greater than b";
}

// else if
if ($a > $b) {
  echo "a is bigger than b";
} elseif ($a == $b) {
  echo "a is equal to b";
} else {
  echo "a is smaller than b";
}

// alternative syntax
if ($a == 5):
  echo "a equals 5";
  echo "...";
elseif ($a == 6):
  echo "a equals 6";
  echo "!!!";
else:
  echo "a is neither 5 nor 6";
endif;