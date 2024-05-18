<?php  // inc2.php

$num = 0;
$r = ++$num; // 前置
echo "r is {$r} <br>";

$num = 0;
$r = $num++; // 後置
echo "r is {$r} <br>";

$num = 0;
$r = $num  +  ++$num; // 前置
echo "r is {$r} <br>";

$num = 0;
$r = $num++  +  $num; // 後置
echo "r is {$r} <br>";
