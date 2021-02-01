<?php  // validate.php
// http://dev2.m-fr.net/アカウント名/validate.php

// 必須入力
$s = ' ';
$i = 0;
//
if ('' === trim($s)) {
    echo "sは必須入力です<br>\n";
}
if (0 === $i) {
    echo "iは必須入力です<br>\n";
}

// 文字の長さ(文字長)
$s = 'あ';
echo 'strlen: ' , strlen($s) , '<br>';
echo 'mb_strlen: ' , mb_strlen($s, 'UTF-8') , '<br>';
echo 'mb_strwidth: ' , mb_strwidth($s, 'UTF-8') , '<br>';

// 日付
var_dump(checkdate(6, 30, 2020));
var_dump(checkdate(6, 31, 2020));
echo '<br>';

// 郵便番号
$post = '123-4567';
$r = preg_match('/\A(\d{3})[- ]{0,1}(\d{4})\z/', $post);
var_dump($post, $r);
echo '<br>';
$post = ' 123-4567';
$r = preg_match('/\A(\d{3})[- ]{0,1}(\d{4})\z/', $post);
var_dump($post, $r);
echo '<br>';

// emailアドレス
$email = 'hoge@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);
echo '<br>';
$email = 'hoge.@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);
echo '<br>';
$email = 'ho..ge@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);
echo '<br>';
$email = '"ho@ge"@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);
echo '<br>';





