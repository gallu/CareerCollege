<?php  // write.php

$file_name = __DIR__ . '/write.txt';
var_dump( is_file($file_name) );
var_dump( is_writable($file_name) );

//
$contents = date(DATE_ATOM) . ": hogera \n";
//
// file_put_contents($file_name, $contents); // 上書き
file_put_contents($file_name, $contents, FILE_APPEND|LOCK_EX); // 追加書き
