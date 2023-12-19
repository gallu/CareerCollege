<?php  // file_write1.php

$fn = __DIR__ . "/write.txt";
var_dump($fn);

// ファイルをopenする
// $fp = fopen($fn, 'w');
$fp = fopen($fn, 'a');
var_dump($fp);

// 書き込む
fwrite($fp, "php file hello \n");

//　ファイルをcloseする
fclose($fp);
