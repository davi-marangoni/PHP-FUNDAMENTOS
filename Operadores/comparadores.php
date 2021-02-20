<?php

// != mesma coisa que <>


$a = 10;
$b = 20;

var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a > $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";

$c = 30;
$d = "30";
var_dump($c === $d);
echo "<br>";
var_dump($c !== $d);