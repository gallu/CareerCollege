<?php  // Q8.php
/*
 Hello world.
 を出力するコードを書きなさい。
 */
echo "Hello world. <br>\n";

/*
 半径5.5cm、πを3.14として、円の面積（半径＊半径＊π)を計算して
 出力するコードを書きなさい
 */
$r = 5.5;
$pi = 3.14;
echo $r ** 2 * $pi;
echo "cm2<br>\n";

/*
 １～12の間で乱数を作ります
 奇数なら「odd」、偶数なら「even」と出力するコードを書きなさい。
 */
$num = random_int(1, 12);
if ($num % 2 === 0) {
    echo "even <br>";
} else {
    echo "odd <br>";
}

/*
1から15までの連続した整数のうち、奇数だけを合計するコードを、for文を使って書きなさい。
 */
$sum = 0;
for ($i = 1; $i <= 15; ++$i) {
    if ($i % 2 === 1) {
        echo "{$i} <br>";
        $sum += $i;
    }
}
echo "sum is {$sum} <br>";




