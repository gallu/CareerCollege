<?php   // file_6.php

$fn = __DIR__ . '/file_write/' . date('Ymd') . '.log';
var_dump($fn);

//
$r = file_put_contents($fn, "test data\n", FILE_APPEND|LOCK_EX);
var_dump($r);

