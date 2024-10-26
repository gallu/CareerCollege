<?php  // judge2.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

/*
(SW無印 の判定)
2ｄ6を振る
ダイス目が目標値以上なら成功
ダイス目が目標値未満なら失敗
 */
function isJudge(int $目標値) {
    //
    $d = dice("2d6");
    $r = $d >= $目標値;

    return ["success" => $r, "dice" => $d];
}

$r =isJudge(7);
var_dump($r);
