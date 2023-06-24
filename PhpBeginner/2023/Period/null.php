<?php  // null.php

$val = 1;
var_dump($val);

$val = 11 ?? 22;
var_dump($val);

$val = null ?? 222;
var_dump($val);

$val = 1111 ?? null;
var_dump($val);

$awk = ["hoge" => 123];

// var_dump( $awk["foo"] );
$val = $awk["foo"] ?? "ないよ？";
var_dump($val);
