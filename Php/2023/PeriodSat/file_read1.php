<?php  // file_read1.php
// https://dev2.m-fr.net/アカウント名/file_read1.php
$fn = __FILE__ ;
// var_dump($fn);

// ファイルをopenする
$fp = fopen($fn, 'r');
if (false === $fp) {
    echo "file opne error.";
    return ;
}
// var_dump($fp);

//　ファイルを読み込む
// $s = fread($fp, 50);
// var_dump($s);

// $line = fgets($fp);
// var_dump($line);
// $line = fgets($fp);
// var_dump($line);

while(false !== ($line = fgets($fp))) {
    var_dump($line);
}

// ファイルをcloseする
fclose($fp);
