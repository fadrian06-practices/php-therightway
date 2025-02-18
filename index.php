<?php

/* STRINGS */

$x = 1;
$y = 2;

// Heredoc
$text = <<<TEXT
 Hello World
TEXT;

var_dump($text);
echo nl2br($text);

// Nowdoc
$text = <<<'TEXT'
Line 1
Line 2
Line 3 ' "
TEXT;

echo '<br />';
echo nl2br($text);
