<?php  // callable.php

$s = 'abcd';

$len = strlen($s);
var_dump($len);

$fs = 'strlen';
$len = $fs($s);
var_dump($len);

$f = strlen(...);
$len = $f($s);
var_dump($len, $f);


