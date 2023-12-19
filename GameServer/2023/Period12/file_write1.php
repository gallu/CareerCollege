<?php  // file_write1.php

$fileName = __DIR__ . "/write.txt";
var_dump($fileName);

//
// $fp = fopen($fileName, 'w');
$fp = fopen($fileName, 'a');
var_dump($fp);

//
fwrite($fp, "file write \n");

//
fclose($fp);
