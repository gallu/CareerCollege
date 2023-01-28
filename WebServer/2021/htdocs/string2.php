<?php   // string2.php
// https://dev2.m-fr.net/アカウント名/string2.php
declare(strict_types=1);

// 文字列の検索
$s = 'abcdefg';
var_dump( strpos($s, 'c') );
if (false === strpos($s, 'c')) {
    echo "cはなかったよ？<br>\n";
}
var_dump( strpos($s, 'Z') );
if (false === strpos($s, 'Z')) {
    echo "Zはなかったよ？<br>\n";
}
var_dump( strpos($s, 'a') );
if (false === strpos($s, 'a')) {
    echo "aはなかったよ？<br>\n";
}
