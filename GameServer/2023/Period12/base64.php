<?php  // base64.php

$h = hash("sha256", "abc");
var_dump($h);

$bh = hash("sha256", "abc", true);
var_dump($bh);

$b_to_h = bin2hex($bh);
var_dump($b_to_h);

$b_to_b = base64_encode($bh);
var_dump($b_to_b);
