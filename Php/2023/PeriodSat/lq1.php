<?php  // lq1.php
/*
問)
自分自身のファイルは __FILE__ でファイル名が取得できます。
自分自身のファイルを全部読み込み、出力しなさい。
 */
// var_dump( __FILE__ );
$fn = __FILE__;
$s = file_get_contents($fn);
echo $s;

echo file_get_contents(__FILE__);

$arr = file($fn);
var_dump($arr);

var_dump(file(__FILE__));

$fobj = new SplFileObject($fn);
foreach ($fobj as $no => $line) {
    echo $line;
}