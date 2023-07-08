<?php  // validate.php
// 日付
var_dump( checkdate(6, 24, 2023) );
var_dump( checkdate(6, 32, 2023) );

$ds = "August 15, 2023";
$t = strtotime($ds);
var_dump($ds, $t);

$ds = "August 33, 2023";
$t = strtotime($ds);
var_dump($ds, $t);
echo "<br>\n";

// 誕生日

//　年齢(数字？）
$num = "123";
$r1 = is_numeric($num);
$r2 = filter_var($num, FILTER_VALIDATE_INT);
var_dump($num, $r1, $r2);

$num = "abc";
$r1 = is_numeric($num);
$r2 = filter_var($num, FILTER_VALIDATE_INT);
var_dump($num, $r1, $r2);

$num = "2e3";
$r1 = is_numeric($num);
$r2 = filter_var($num, FILTER_VALIDATE_INT);
var_dump($num, $r1, intval($num), $r2);

//　文字長(name）
$s = "あいう";
$r1 = strlen($s);
$r2 = mb_strlen($s);
$r3 = mb_strwidth($s);
var_dump($r1, $r2, $r3);
echo "<br> \n";

//　パスワード長

//　zip
// ・「フォーマット」の正しさ
$zip = "aaa000-0000bbb";
$zip = "000-0000";
// $zip = "0000000";
$pattern = "/\A[0-9]{3}[\- ]{0,1}[0-9]{4}\z/";
$r = preg_match($pattern, $zip);
var_dump($r);

$zip = "abc";
$r = preg_match($pattern, $zip);
var_dump($r);
echo "<br>\n";

//　email
// ・実在
// ・「フォーマット」の正しさ
$email = "hoge@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "hogehoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "hoge+add@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "hoge-add@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = '"hoge@hoge"@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "hoge@[1.2.3.4]";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "hoge.@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "ho.ge@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);

$email = "ho..ge@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r);


