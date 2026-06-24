<?php  // rand1.php
declare(strict_types=1);

// 一般的なビンゴゲームは、1〜75番の数字を使用するのが最も主流です
// 乱数として推奨
$num = random_int(1, 75);
var_dump($num);
echo "<br>";

// 使う理由がないので非推奨
$num = mt_rand(1, 75);
var_dump($num);
echo "<br>";
// 使う理由がないので非推奨(今はmt_randと一緒)
$num = rand(1, 75);
var_dump($num);
echo "<br>";

