<?php  // lq11.php
/*
問
/tmp/13TOKYO.CSV に、CSVファイルがあります。
このファイルをcsvとして読み込んで、var_dump()で出力するコードを書きなさい。
文字コードがSJISなので、UTF-8に変換しましょう。
 */
$fileName = "/tmp/13TOKYO.CSV";
var_dump($fileName);

//
$fp = fopen($fileName, "r");
var_dump($fp);

//
while(true) {
    $row = fgetcsv($fp);
    if (false === $row) {
        break;
    }
    $row = mb_convert_encoding($row, "UTF-8", "SJIS");
    var_dump($row);
}

//
fclose($fp);
