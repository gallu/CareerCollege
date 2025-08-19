<?php  // file_write.php

$fn = __DIR__ . '/file_write.txt';

echo "file_exists is ";
var_dump( file_exists($fn) );
echo "<br>";

echo "is_writable is ";
var_dump( is_writable($fn) );
echo "<br>";

$log = date(DATE_ATOM) . "\t hoge\n";
echo "{$log} <br>";

// $r = file_put_contents($fn, $log); // 上書き
$r = file_put_contents($fn, $log, FILE_APPEND); // 追加書き
var_dump($r);
