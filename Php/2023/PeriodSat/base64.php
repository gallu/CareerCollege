<?php  // base64.php

$base_string = "abc";
$hb = hash("sha256", $base_string, true);
var_dump($hb);

$h = bin2hex($hb);
var_dump($h);

$h = base64_encode($hb);
var_dump($h);
