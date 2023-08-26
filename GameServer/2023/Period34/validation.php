<?php  // validation.php

$in = "123";
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$in = 3.14;
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$in = "abc";
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$in = "012";
$r = filter_var($in, FILTER_VALIDATE_INT);
var_dump($r);

$s = "あいう";
$len_1 = strlen($s);
$len_2 = mb_strlen($s);
$len_3 = mb_strwidth($s);
var_dump($len_1, $len_2, $len_3);

// email(郵便番号)
// フォーマット
// 実在
function v($email) {
    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
        return true;
    } else {
        return false;
    }
}
//
$email = "hoge@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = "hogehoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = "hoge+abc@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = "hoge@[1.2.3.4]";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = '"ho@ge"@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = "ho.ge@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = "ho..ge@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = "hoge.@hoge.com";
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));
//
$email = '"ho..ge."@hoge.com';
$r = filter_var($email, FILTER_VALIDATE_EMAIL);
var_dump($email, $r, v($email));


