<?php  // incdec.php

$i = 0;
echo "i is {$i}<br>";

$i = $i + 1;
echo "i is {$i}<br>";

// 複合代入演算子
$i += 1;
echo "i is {$i}<br>";

// インクリメント / 加算子
++ $i; // 前置
echo "i is {$i}<br>";

$i ++; // 後置
echo "i is {$i}<br>";

// デクリメント / 減算子
-- $i; // 前置
echo "i is {$i}<br>";

$i --; // 後置
echo "i is {$i}<br>";

