<?php  // csv_read.php

$fn = "/tmp/13TOKYO.csv";

// ファイルをopenする
$fp = fopen($fn, 'r');
if (false === $fp) {
    echo "ファイルがあかなかったよ？";
    return ; // プログラムを終了させる
}
var_dump($fp);

//　読み込む
while(true) {
    $row = fgetcsv($fp);
    if (false === $row) {
        break;
    }
    $row = mb_convert_encoding($row, "UTF-8", "SJIS");
    var_dump($row);
}
/*
while(false !== ($row = fgetcsv($fp))) {
    $row = mb_convert_encoding($row, "UTF-8", "SJIS");
    var_dump($row);
}
*/

// ファイルをcloseする
fclose($fp);
