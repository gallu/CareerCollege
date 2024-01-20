<?php  // lq2.php
/*
問
__FILE__ を使うと「自分自身のファイル」のフルパスを取得することができる。
__FILE__ のファイルの中身を「全部読みだして、出力する」コードを書きなさい。
 */
// var_dump(__FILE__);
$fn = __FILE__;
$s = file_get_contents($fn);
echo $s;

echo file_get_contents(__FILE__);

$arr = file($fn);
var_dump($arr);

var_dump( file(__FILE__) );
