<?php

/** variable scopes */

// $x = 5;

function getValue() {
  static $value = null;

  if ($value === null) {
    $value = someVeryExpensiveFunction();
  }

  // some more processing with $value

  return $value;
}

function someVeryExpensiveFunction() {
  sleep(2);

  echo 'Processing';

  return 10;
}

echo getValue(), '<br />';
echo getValue(), '<br />';
echo getValue(), '<br />';

echo $x;

// include 'script1.php';

// echo '<br />';
// echo $x;
