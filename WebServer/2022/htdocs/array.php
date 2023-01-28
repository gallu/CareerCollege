<?php   // array.php
declare(strict_types=1);

$awk = [1, "2nd", 3.14];
var_dump($awk);

$awk2 = array(2, "3rd", 4.44);
var_dump($awk2);

$h_awk = [
    'key' => 1,
    'key2' => 'value',
];
var_dump($h_awk);
