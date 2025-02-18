<?php

/* BOOLEANS */

$isComplete = 'false';

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

if ($isComplete) {
  // do something
  echo 'success';
} else {
  // do something else
  echo 'fail';
}
