<?php   // valid.php
// https://dev2.m-fr.net/アカウント名/valid.php

// 必須入力
$_GET['name'] = ' '; // スペース１つ
$name = $_GET['name'] ?? '';
if ('' === $name) {
    echo "必須だよ？ なんか入力して？<br>\n";
}
if ('' === trim($name)) {
    echo "必須だよ？ なんか入力して？ その２ <br>\n";
}

// 日付
$y = 2020;
$m = 2;
$d = 31;
var_dump("{$y}/{$m}/{$d}", checkdate($m, $d, $y));

// 誕生日
$y = 920;
$m = 5;
$d = 29;
var_dump("{$y}/{$m}/{$d}", checkdate($m, $d, $y));

// 郵便番号(日本)
// nnn nnnn
$post = '123-4567';
$r = preg_match('/\\A[0-9]{3}[- ]{0,1}[0-9]{4}\\z/', $post, $match);
var_dump($r, $match);

// 身長とか体重とか
$height = '1.3e3';
//$height = '170.5';
$height = 'abc';
var_dump( (int)$height, is_numeric($height) );
var_dump( ctype_digit($height) );
var_dump( filter_var($height, FILTER_VALIDATE_FLOAT) );

// email
$email = '"hoge@hoge"@hoge.com';
$email = 'hoge@hoge@hoge.com';
$email = 'hoge@[1.2.3.256]';
var_dump( filter_var($email, FILTER_VALIDATE_EMAIL) );

// 0で割る
$i = 10 / 0;





