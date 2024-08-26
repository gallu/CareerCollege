<?php  // Q1.php

/*
乱数xと乱数yを、それぞれ「０～９９９９」の間で用意します。
xのほうが大きい場合は「X」、yのほうが大きい場合は「y」を表示するコードを書きなさい。
 */
$x = random_int(0, 9999);
$y = random_int(0, 9999);
var_dump($x, $y);
if ($x > $y) {
    echo "x <br>";
} else {
    echo "y <br>";
}

/*
100点満点のテストがあります。
点数を乱数で作成、成績の評価をしてください。

点数     評価
90～100  A
80～89   B
70～79   C
60～69   D
59以下   E
 */
$point = random_int(0, 100);
if ($point >= 90) {
    echo "A <br>";
} elseif ($point >= 80) {
    echo "B <br>";
} elseif ($point >= 70) {
    echo "C <br>";
} elseif ($point >= 60) {
    echo "D <br>";
} else {
    echo "E <br>";
}

/*
 "Hello"を10回出力するコードを、for文を使って書きなさい
 */
for ($i = 0; $i < 10; ++$i) {
    echo "Hello <br>";
}
echo "<br>";

/*
 九九の４の段（4*1 から 4*9)を表示するコードを、for文を使って書きなさい
 */
for ($i = 1; $i <= 9; ++$i) {
    echo 4 * $i , "<br>";
}













