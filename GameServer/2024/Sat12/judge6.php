<?php  // judge6.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

/*
(WoDの判定)
「能力値」d10 のダイスを振る
各ダイスごとに目標値と比較する。ダイス目が目標値以上なら成功
成功していたら「成功度」を+1する
ダイスが1の場合、「成功度」を-1する
成功度を返す

例)
能力値 4
目標値 6
10  成功
2   失敗
1   失敗 -1
7   成功
    ⇒ 成功度 +1
 */
function isJudge(int $能力値, int $目標値) {
    $成功度 = 0;
    $ダイス目 = [];
    for ($i = 0; $i < $能力値; ++$i) {
        $r = dice("1d10");
        $ダイス目[] = $r; // 出たダイス目を保存
        // var_dump($r);
        if ($r >= $目標値) {
            ++ $成功度;
        }
        if (1 === $r) {
            -- $成功度;
        }
    }
    return ["success" => $成功度, "dice" => $ダイス目];
}

$r = isJudge(6, 6);
print_r($r);
