<?php  // base64.php

$base_string = "abc";
$h = hash("sha512", $base_string, true);
var_dump($h);

$hs = bin2hex($h);
var_dump($hs);

$hb = base64_encode($h);
var_dump($hb);

