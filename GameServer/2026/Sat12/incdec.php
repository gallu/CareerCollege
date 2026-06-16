<?php  // incdec.php

$num = 0;
echo "num is {$num} <br>";

$num = $num + 1;
echo "num is {$num} <br>";

$num += 1;
echo "num is {$num} <br>";

++ $num; // インクリメント(加算子): 前置
echo "num is {$num} <br>";

$num ++; // インクリメント: 後置
echo "num is {$num} <br>";

-- $num; // デクリメント(減算子): 前置
echo "num is {$num} <br>";

$num --; // デクリメント: 後置
echo "num is {$num} <br>";

