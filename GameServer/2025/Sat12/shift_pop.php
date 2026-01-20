<?php  // shift_pop.php

$awk = [0, 1, 2, 3, 4, 5];
$d = array_shift($awk);
var_dump($d);
print_r($awk);

//
$awk = [0, 1, 2, 3, 4, 5];
$d = array_pop($awk);
var_dump($d);
print_r($awk);
