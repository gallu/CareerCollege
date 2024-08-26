<?php  // Q5.php

/*
乱数 $x と $y を作成します。
$xが$yより大きかったら「大きい！」と表示するコードを書きなさい。
 */
$x = random_int(0, 999);
$y = random_int(0, 999);
// $xが$yより大きかったら
var_dump($x, $y);
if ($x > $y) {
    // 「大きい！」と表示する
    echo "大きい！ <br>";
}

/*
乱数 $x と $y を作成します。
$xが$yより大きかったら「大きい！」と表示、$xが$yより小さかったら「小さい！」、同
じ値だったら「同じ」と表示するコードを書きなさい。
 */
$x = random_int(0, 999);
$y = random_int(0, 999);

if ($x > $y) {
    echo "大きい！ <br>";
} elseif ($x < $y) {
    echo "小さい！ <br>";
} elseif ($x === $y) {
    echo "同じ！ <br>";
}

/*
乱数でXとY、大きい方を出力しなさい
 */
$x = random_int(0, 999);
$y = random_int(0, 999);

if ($x > $y) {
    echo "{$x}";
} else {
    echo "{$y}";
}

if ($x > $y) {
    echo "x, {$x}";
} elseif ($x < $y) {
    echo "y, {$y}";
} else {
    echo "等しい {$x}";
}

/*
100点満点のテストがあります。
点数を乱数で作成、60点以上なら「合格」、59点以下なら「不合格」を出力しなさい
 */
// 100点満点のテストがあります。点数を乱数で作成
$point = random_int(0, 100);

if ($point >= 60) {
    echo "合格";
} elseif ($point <= 59) {
    echo "不合格";
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

// if ($point >= 90 && $point <= 100 ) {
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

/*
乱数でXを作成します。3の倍数かを調べなさい。
3の倍数なら「倍数！」、そうでなければ「違う」を出力しなさい。
 */
$x = random_int(1, 999);
if (($x % 3) === 0) {
    echo "倍数!";
} else {
    echo "違う";
}

/*
 乱数で年齢を作成します。
 20歳以上なら「成人」、20歳未満なら「未成年」と出力しなさい。
 */
$age = random_int(0, 40);

if ($age >= 20) {
    echo "成人";
} elseif ($age < 20) {
    echo "未成年";
}

if ($age >= 20) {
    echo "成人";
} else {
    echo "未成年";
}

/*
 乱数で「会員状態」を作成します。0なら非会員、1なら会員とします。
 非会員なら「1000円」、会員なら「500円」と出力しなさい。
 */
$member_status = random_int(0, 1);

if (0 === $member_status) {
    echo "1000円";
} else {
    echo "500円";
}

if (0 === $member_status) {
    echo "1000円";
} elseif (1 === $member_status) {
    echo "500円";
}

/*
 乱数で年齢と会員状態を作成します。
 会員状態は、0なら非会員、1なら会員とします。
 値段は「20歳以上の会員は1100円、非会員は1500円」「20歳未満の会員は500円、非会員は800円」です。
 値段を出力しなさい。
 */
$age = random_int(0, 40);
$member_status = random_int(0, 1);

if ($age >= 20 && $member_status === 1) {
    echo "1100円";
} elseif ($age >= 20 && $member_status === 0) {
    echo "1500円";
} elseif ($age < 20 && $member_status === 1) {
    echo "500円";
} elseif ($age < 20 && $member_status === 0) {
    echo "800円";
}

if ($age >= 20) {
    if ($member_status === 1) {
        echo "1100円";
    } else {
        echo "1500円";
    }
} else {
    if ($member_status === 1) {
        echo "500円";
    } else {
        echo "800円";
    }
}

