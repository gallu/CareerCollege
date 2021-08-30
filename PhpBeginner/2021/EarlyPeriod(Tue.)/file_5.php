<?php   // file_5.php

$dir = __DIR__ . '/file_write';
var_dump( is_writable( $dir ) );

//
$file_name = $dir . '/' . date('Ymd') . '.txt';
$log = date('Y-m-d H:i:s') . "\t test log \n";
file_put_contents($file_name, $log, FILE_APPEND | LOCK_EX);

/*
$file_name = $dir . '/' . time() . '.txt';
$r = file_put_contents($file_name, 'text body');
var_dump($r);
*/

/*
fopen()
fputs / fwrite
fclose
*/