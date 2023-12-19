<?php  // base64.php

// 
$b = random_bytes(64);
//var_dump($b);

//
$h = bin2hex($b);
var_dump($h);

//
$bs = base64_encode($b);
var_dump($bs);

