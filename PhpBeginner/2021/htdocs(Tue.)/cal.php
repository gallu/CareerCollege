<?php   // cal.php

// 計算の元ネタの乱数を作成
$i = random_int(1, 100);
echo "{$i} <br>\n";
$j = random_int(1, 100);
echo "{$j} <br>\n";

// 足し算
$k = $i + $j;
echo "{$i} + {$j} = {$k} <br>\n";

// 引き算
$k = $i - $j;
echo "{$i} - {$j} = {$k} <br>\n";

// 掛け算
$k = $i * $j;
echo "{$i} * {$j} = {$k} <br>\n";

// 割り算
$k = $i / $j;
echo "{$i} / {$j} = {$k} <br>\n";

// 剰余演算
$k = $i % $j;
echo "{$i} % {$j} = {$k} <br>\n";

// 乗数
$k = $i ** $j;
echo "{$i} ** {$j} = {$k} <br>\n";

// 計算の優先順位
$k = $i + $j * $i;
echo "{$i} + {$j} * {$i} = {$k} <br>\n";
//
$k = ($i + $j) * $i;
echo "({$i} + {$j}) * {$i} = {$k} <br>\n";







