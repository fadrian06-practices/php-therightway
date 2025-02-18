<?php

/** functions */

declare(strict_types=1);

function foo(int $x, int $y): int {
  var_dump($x, $y);

  if ($x % $y === 0) {
    return $x / $y;
  }

  return $x;
}

$arr = [2, 'x' => 1];

echo foo(...$arr);
