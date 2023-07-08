<?php  // validation.php

$in = "123";
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$in = 3.14;
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$in = "abc";
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$in = "012";
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$s = "あいう";
$len_1 = strlen($s);
$len_2 = mb_strlen($s);
$len_3 = mb_strwidth($s);
var_dump($len_1, $len_2, $len_3);

// email
