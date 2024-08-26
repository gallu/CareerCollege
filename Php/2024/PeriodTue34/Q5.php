<?php  // Q5.php

/*
 かけ算九九を表示するプログラムを、for文を使って書きなさい
 */
for($i = 1; $i <= 9; ++$i) {
    // echo "i: {$i} <br>";
    for($j = 1; $j <= 9; ++$j) {
        // echo "j: {$j} <br>";
        echo $i * $j , ",";
    }
    echo "<br>";
}
echo "<br>";

/*
 1から100までの整数を合計するコードを、for文を使って書きなさい
 */
$total = 0;
for ($i = 1; $i <= 100; ++$i) {
    // echo "{$i},";
    $total = $total + $i;
    // $total += $i;
}
echo $total , "<br>";
echo "<br>";

/*
 1から20までの整数を出力するコードをかけ
 また、３の倍数の時は「３の倍数」の文字も出力せよ
 */
for ($i = 1; $i <= 20; ++$i) {
    $sufix = "";
    if ($i % 3 === 0) {
        $sufix = ": 3の倍数";
    }
    echo "{$i}{$sufix}<br>";

    // echo $i;
    // if ($i % 3 === 0) {
        // echo ":3の倍数";
    // }
    // echo "<br>";
    
    // if ($i % 3 === 0) {
        // echo "{$i}: 3の倍数<br>";
    // } else {
        // echo "{$i}<br>";
    // }
}
echo "<br>";

/*
 1から20までの整数を出力するコードをかけ
 また、３の倍数の時は「３の倍数」の文字も出力せよ
 また、5の倍数の時は「5の倍数」の文字も出力せよ
 */
for ($i = 1; $i <= 20; ++$i) {
    // if ($i % 3 === 0) {
        // echo "{$i}: 3の倍数<br>";
    // } elseif ($i % 5 === 0) {
        // echo "{$i}: 5の倍数<br>";
    // } else {
        // echo "{$i}<br>";
    // }

    // if ($i % 5 === 0) {
        // echo "{$i}: 5の倍数<br>";
    // } elseif ($i % 3 === 0) {
        // echo "{$i}: 3の倍数<br>";
    // } else {
        // echo "{$i}<br>";
    // }

    // if ($i % 3 === 0 && $i % 5 === 0) {
        // echo "{$i}: 3かつ5の倍数<br>";
    // } elseif ($i % 3 === 0) {
        // echo "{$i}: 3の倍数<br>";
    // } elseif ($i % 5 === 0) {
        // echo "{$i}: 5の倍数<br>";
    // } else {
        // echo "{$i}<br>";
    // }

    // echo $i;
    // if ($i % 3 === 0) {
        // echo ": 3の倍数";
    // }
    // if ($i % 5 === 0) {
        // echo ": 5の倍数";
    // }
    // echo "<br>";

    if ($i % 15 === 0) {
        echo "{$i}: 3かつ5の倍数<br>";
    } elseif ($i % 3 === 0) {
        echo "{$i}: 3の倍数<br>";
    } elseif ($i % 5 === 0) {
        echo "{$i}: 5の倍数<br>";
    } else {
        echo "{$i}<br>";
    }
}













