<?php  // dice.php
declare(strict_types=1);

// 前提: 引数は ndm とする(nとmは整数)
function dice(string $dice_string): int {
    // 引数から、mとnを取り出す
    $awk = explode("d", $dice_string);
    // nとmを取り出して整数化しておく
    $n = (int)$awk[0];
    $m = (int)$awk[1];
    // var_dump($awk, $n, $m);

    // m面のサイコロをn回ふる
    $total = 0;
    for ($i = 0; $i < $n; ++$i) {
        // m面のサイコロをふる
        $r = random_int(1, $m);
        // var_dump($r);
        // 足していく
        $total += $r;
    }

    // 戻り値
    return $total;
}

// 使う
$r = dice("2d6");
var_dump($r);
echo "<br>";
