<?php   // hash_array.php
// https://dev2.m-fr.net/furu/php1/hash_array.php

//
$ai = [ 123, 456, 789 ];
var_dump($ai);
// hash配列(連想配列)
$hash_ai = [ '国語' => 80, '数学' => 92, '社会' => 75 ];
var_dump($hash_ai);

//
$count = count($hash_ai);
var_dump($count);

//
foreach($hash_ai  as  $k => $v) {
    echo "{$k}: {$v}点 \n";
}







