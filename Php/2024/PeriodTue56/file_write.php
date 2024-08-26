<?php  // file_write.php

$fn = __DIR__ . '/file_write.txt';

// $r = file_put_contents($fn, "data line \n");
$r = file_put_contents($fn, "data line \n", FILE_APPEND);
var_dump($r);
