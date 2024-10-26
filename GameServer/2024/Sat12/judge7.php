<?php // judge7.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";
/*
(SRの判定)
「能力値」d6 のダイスを振る
各ダイスごとに目標値と比較する。ダイス目が目標値以上なら成功
ダイス目が6の場合、そのダイスの値を振り足すことができる
成功していたら「成功度」を+1する
成功度を返す

例)
能力値 4
目標値 8
2   失敗
3   失敗
5   失敗
6+2 成功
*/
function isJudge(int $能力値, int $目標値) {
    $成功度 = 0;
    $ダイス目 = [];
    for ($i = 0; $i < $能力値; ++$i) {
        $r = 0;
        // while(true) {
            // $d = dice("1d6");
            // $r += $d;
            // if (6 !== $d) {
                // break;
            // }
        // }
        do {
            $d = dice("1d6");
            $r += $d;
        } while(6 === $d);

        $ダイス目[] = $r; // 出たダイス目を保存
        // var_dump($r);
        if ($r >= $目標値) {
            ++ $成功度;
        }
    }
    return ["success" => $成功度, "dice" => $ダイス目];
}

$r = isJudge(12, 8);
print_r($r);
