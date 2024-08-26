<?php  // Q1.php

// 自分の「名前」をechoで出力するコードを書きなさい。
echo "古庄 道明 <br>";

/*
$i = random_int(1, 10);
$j = random_int(1, 10);
で２つの変数を作成し、この変数を四則演算(足し算、引き算、掛け算、割り算)した結果を出力しなさい。
 */
$i = random_int(1, 10);
$j = random_int(1, 10);
//
echo $i + $j , "<br>";
echo $i - $j , "<br>";
echo $i * $j , "<br>";
echo $i / $j , "<br>";

$k = $i + $j;
echo "{$k} <br>";

echo "{$i} + {$j} = {$k} <br>";

