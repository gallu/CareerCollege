<?php   // string.php

$num = 10;

echo "num is ";
echo $num;
echo ".";
echo "<br>";

// 文字列の連結
$str = "num is " . $num . "." . "<br>";
echo $str;

// echoは「連続して」出力できる
echo "num is ", $num, ".", "<br>";

// 埋め込み
$str = "num is {$num}. <br>";
echo $str;



