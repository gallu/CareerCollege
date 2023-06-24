<?php  // bit.php

// 論理演算
var_dump(true && false);
var_dump(true || false);
echo "<br>\n";

// ビット演算
$num1 = 0xf0;
$num2 = 0x7a;
$num3 = $num1 & $num2;
$num4 = $num1 | $num2;
var_dump($num3, $num4);
echo "<br>\n";
printf("%08s <br>\n", decbin($num1));
printf("%08s <br>\n", decbin($num2));
printf("%08s <br>\n", decbin($num3));
printf("%08s <br>\n", decbin($num4));
