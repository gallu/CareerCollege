<?php  // expimp.php

// ベースになる文字列(数値が : で区切られている
$bs = "1:2:5:9:11";
// :の文字を目印に切って「配列」にする
$awk = explode(":", $bs);

echo "{$bs} -> ";
var_dump($awk);

// 配列を1本の文字列にする
$ns = implode("#", $awk);
echo $ns;

//
$dice_string = "2d6";
$awk = explode("d", $dice_string);
var_dump($awk);

