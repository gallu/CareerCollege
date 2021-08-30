<?php   // validate.php

// 日付のvalidate
var_dump( checkdate(2, 31, 2021) );
var_dump( checkdate(2, 29, 2020) );
var_dump( checkdate(2, 1, 0) );

// 誕生日
// XXXXXX

// 郵便番号
// 正規表現

// 文字数
$s = 'あ';
var_dump( strlen($s),  mb_strlen($s),  mb_strwidth($s) );

// email
// XXX 原則として「正規表現でのvalidate」はやめとけ

// 「０で割る」はNG
$i = 0 / 10;
var_dump($i);

