<?php  // lq2.php
/*
問
「自分自身」のファイル　__FILE__ の内容をすべて読み込み、出力するコードをかけ。
ファイルの内容は、配列でも文字列でもよい、とする。
*/
var_dump(__FILE__);
$fn = __FILE__;
//
// echo file_get_contents($fn);
$files = file_get_contents($fn);
echo $files;

$files = file($fn);
var_dump($files);

$obj = new SplFileObject($fn);
foreach($obj as $no => $line) {
    echo $line;
}

//
$fp = fopen($fn, "r");
/*
while(true) {
    $line = fgets($fp);
    if (false === $line) {
        break;
    }
    echo $line;
}
*/
while(false !== ($line = fgets($fp))) {
    echo $line;
}

fclose($fp);
