<?php  // file_read.php
//  https://dev2.m-fr.net/アカウント名/file_read.php

$fn = __FILE__;
var_dump($fn);

// ファイルをopenする
$fp = fopen($fn, "r");
var_dump($fp);

// １行読み込む
/*
while(true) {
    $line = fgets($fp);
    if (false === $line) {
        break;
    }
    var_dump($line);
}
*/
while(false !== ($line = fgets($fp))) {
    var_dump($line);
}

// ファイルをcloseする
fclose($fp);
