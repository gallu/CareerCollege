<?php  // arr5.php

$arr = [1, 2, 3, 4, 5, 6];
print_r($arr);

$v = array_shift($arr);
var_dump($v);
print_r($arr);

$v = array_pop($arr);
var_dump($v);
print_r($arr);
