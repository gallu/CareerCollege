<?php  // file_write2.php

$fn = __DIR__ . "/write.txt";
var_dump($fn);

file_put_contents($fn, "php put data \n", FILE_APPEND);
