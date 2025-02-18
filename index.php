<?php

// ARRAYS
$array = ['a' => 1, 'b' => null];

var_dump(array_key_exists('b', $array));

var_dump(isset($array['b']));
