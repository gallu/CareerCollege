<?php  // validate.php
/*
 * 「正しい」かどうかの確認
 */
$y = 1900;
$m = 12;
$d = 1;
//
$r = checkdate($m, $d, $y);
var_dump("{$y}-{$m}-{$d}", $r);

$y = 2023;
$m = 12;
$d = 32;
//
$r = checkdate($m, $d, $y);
var_dump("{$y}-{$m}-{$d}", $r);

$y = 0;
$m = 12;
$d = 5;
//
$r = checkdate($m, $d, $y);
var_dump("{$y}-{$m}-{$d}", $r);

// 「必須入力」の確認
$input = "";
$input = "0"; // empty() だけ「空扱い」になる

if ("" ===  $input) {
    echo "未入力です　その1 \n";
}
if (0 ===  strlen($input)) {
    echo "未入力です　その2 \n";
}
//　empty()はわりと要注意
if (true === empty($input)) {
    echo "未入力です　その3 \n";
}

