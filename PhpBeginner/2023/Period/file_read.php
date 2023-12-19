<?php  // file_read.php

$fn = __FILE__ ;
var_dump($fn);

//　ファイルをopenする
$fp = fopen($fn, 'r');
// $fp = fopen("dummy", 'r');
var_dump($fp);

// ファイルを読み込む
// $r = fread($fp, 10);
// var_dump($r);
// $line = fgets($fp);
// var_dump($line);
while(true) {
    $line = fgets($fp);
    if (false === $line) {
        break;
    }
    var_dump($line);
}
/*
while(false !== ($line = fgets($fp))) {
    var_dump($line);
}
*/

//　ファイルをcloseする
$r = fclose($fp);
var_dump($r);
