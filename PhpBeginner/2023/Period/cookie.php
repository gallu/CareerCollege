<?php  // cookie.php

ob_start();

//
var_dump($_COOKIE);
$num = (int) ($_COOKIE["num"] ?? 0);
var_dump($num);
echo "あなたがこのサイトを訪れたのは {$num} 回目ですね";

$num += 1;
setcookie("num", (string) $num);

// setcookie("name", "value");

ob_end_flush();