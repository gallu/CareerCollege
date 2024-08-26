<?php  // Q2.php

/*
乱数 $x と $y を作成します。
$xが$yより大きかったら「大きい！」と表示するコードを書きなさい。
 */
$x = random_int(0, 999);
$y = random_int(0, 999);

echo "x = {$x} <br>";
echo "y = {$y} <br>";
if ($x > $y) {
    echo "大きい！ <br>";
}

/*
乱数 $x と $y を作成します。
$xが$yより大きかったら「大きい！」と表示、$xが$yより小さかったら「小さい！」、同じ値だったら「同じ」と表示するコードを書きなさい。
 */
$x = random_int(0, 999);
$y = random_int(0, 999);

if ($x > $y) {
    echo "大きい！ <br>";
}
if ($x < $y) {
    echo "小さい！ <br>";
}
if ($x === $y) {
    echo "同じ <br>";
}


if ($x > $y) {
    echo "大きい！ <br>";
} elseif ($x < $y) {
    echo "小さい！ <br>";
} elseif ($x === $y) {
    echo "同じ <br>";
}

if ($x > $y) {
    echo "大きい！ <br>";
} elseif ($x < $y) {
    echo "小さい！ <br>";
} else {
    echo "同じ <br>";
}

/*
乱数でXとY、大きい方を出力しなさい
 */
$x = random_int(0, 999);
$y = random_int(0, 999);

if ($x > $y) {
    echo "{$x} <br>";
} else {
    echo "{$y} <br>";
}

/*
100点満点のテストがあります。
点数を乱数で作成、60点以上なら「合格」、59点以下なら「不合格」を出力しなさい
 */
// 100点満点のテストがあります。点数を乱数で作成
$point = random_int(0, 100);
// $point = 59;
if ($point >= 60) {
    echo "合格 <br>";
} elseif ($point <= 59 ) {
    echo "不合格 <br>";
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
// $point = 100;

echo "{$point}なので";
if (90 <= $point) {
    echo "A";
} elseif (80 <= $point) {
    echo "B";
} elseif (70 <= $point) {
    echo "C";
} elseif (60 <= $point) {
    echo "D";
} else {
    echo "E";
} 
echo "評価 <br>";

/*
乱数でXを作成します。3の倍数かを調べなさい。
3の倍数なら「倍数！」、そうでなければ「違う」を出力しなさい。
 */
$x = random_int(1, 999);
$z = $x % 3;
// var_dump($x, $z);
if (0 === $z) {
    echo "倍数 <br>";
} else {
    echo "違う <br>";
}


// var_dump($x, $z);
if (0 === ($x % 3)) {
    echo "倍数 <br>";
} else {
    echo "違う <br>";
}







