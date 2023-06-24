<?php  // isset.php

$awk = [];

// $awk["foo"] = 10;
/*
if (isset($awk["hoge"]) === false) {
    $awk["hoge"] = 0;
}
if (isset($awk["foo"]) === false) {
    $awk["foo"] = 0;
}
*/

// $awk["foo"] = $awk["foo"] ?? 0;
$awk["hoge"] ??= 0;
$awk["foo"] ??= 0;

$awk["hoge"] ++;
echo "{$awk['foo']} <br>\n";
