<?php 
$x = 10;
//echo ++$x; // 11
//echo $x++; // 10
//echo $y = $x++; // 11
//echo $x; // 12
$y = '10';
$z = 10;
var_dump($x == $y); // true
var_dump($x === $z); // true
var_dump($x === $y); // false