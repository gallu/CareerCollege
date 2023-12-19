<?php  // session.php

ob_start();
session_start();

//
var_dump($_SESSION);
$num = $_SESSION["num"] ?? 0;
var_dump($num);
echo "あなたがこのサイトを訪れたのは {$num} 回目ですね";

$num += 1;
$_SESSION["num"] = $num;

// $_SESSION["name"] = "value";

ob_end_flush();
