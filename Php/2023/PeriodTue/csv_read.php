<?php  // csv_read.php

$fn = "/tmp/data.csv";
// $lines = file($fn);
// var_dump($lines);

$fp = fopen($fn, 'r');
while(false !== ($row = fgetcsv($fp))) {
    // 文字コードを変換
    $row = mb_convert_encoding($row, 'UTF-8', 'SJIS-win');
    var_dump($row);
}

//
fclose($fp);
