<?php

// LOOPS

// while
$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
}
echo '<br>';

// while with break
$j = 1;
while (true) {
  if($j > 10){
    break;
  }
  echo $j++;
}
echo '<br>';

// multiple while with break
$k = 1;
while (true) {
  while ($k > 10){
    break 2; // break 2 level of while loops
  }
  echo $k++;
}
echo '<br>';

// while with continue
$a = 1;
while ($a < 10){
  if($a % 2 == 0){
    $a++;
    continue;
  }
  echo $a++;
}

echo '<br>';

// do-while
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 10);
echo '<br>';

// for
// for model 1
for ($i = 1; $i <= 10; $i++) {
  echo $i;
}
echo '<br>';

// for model 2
for ($i = 1; ; $i++) {
  if ($i > 10) {
      break;
  }
  echo $i;
}
echo '<br>';

// for model 3
$i = 1;
for (; ; ) {
  if ($i > 10) {
      break;
  }
  echo $i;
  $i++;
}
echo '<br>';

// for model 4
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
echo '<br>';


// foreach - for array
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}