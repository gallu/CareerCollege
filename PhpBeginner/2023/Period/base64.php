<?php  // base64.php

$str = "abc";
$h = hash("sha256", $str);
var_dump($h);

$bh = hash("sha256", $str, true);
var_dump($bh);

$b_to_h = bin2hex($bh);
var_dump($b_to_h);

$b_to_64 = base64_encode($bh);
var_dump($b_to_64);
