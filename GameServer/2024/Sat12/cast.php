<?php  // cast.php

$s = "123";
var_dump($s);

$i = (int)$s;
var_dump($i);

$i2 = intval($s);
var_dump($i2);

$s = "1a2b";
$i = (int)$s;
var_dump($i);
