<?php   // val2.php

// 四則演算と文字列の書き方
$i = random_int(1, 20);
$j = random_int(1, 20);
echo "{$i} <br>\n";
echo "{$j} <br>\n";

// 引き算
$k = $i - $j;
echo "{$i} - {$j} = {$k} <br>\n";

// 掛け算
$k = $i * $j;
echo "{$i} * {$j} = {$k} <br>\n";
