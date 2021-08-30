<?php  // file_5.php

$fn = __DIR__ . '/file_write/' . strval(time()) . '.txt';
var_dump($fn);

$w = is_writable(__DIR__ . '/file_write/');
var_dump($w);

//
$r = file_put_contents($fn, "test data\n");
var_dump($r);
