<?php  // before_make_pass.php

$base = 'abcdefghijklmn';

// 文字の長さを調べる
$len = strlen($base);
var_dump($len);
echo "<br>";

// 上述文字列から「ランダムに1文字」選択する
$idx = random_int(0, $len-1);
$c = $base[$idx];
var_dump($c);
echo "<br>";

// 上述文字列から「ランダムに5文字」選択する
$pass = "";
for ($i = 0; $i < 5; ++$i) {
    $idx = random_int(0, $len-1);
    $pass .= $base[$idx];
}
var_dump($pass);
echo "<br>";

