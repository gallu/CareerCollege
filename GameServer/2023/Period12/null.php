<?php  // null.php

$awk = [
    "test_1" => 111,
];

$val = $awk["test_1"];
var_dump($val);

// Warning: Undefined array key "dummy" in
// $val = $awk["dummy"];
// var_dump($val);

$val = $awk["dummy"]  ??  0;
var_dump($val);

$val = $awk["test_1"]  ??  0;
var_dump($val);
