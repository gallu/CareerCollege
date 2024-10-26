<?php  // judge1.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

/*
(D&D 1stのセービングスロー)
1d20を振る
ダイス目が目標値以上なら成功
ダイス目が目標値未満なら失敗
 */
function isJudge(int $目標値) {
    //
    $d = dice("1d20");
    $r = $d >= $目標値;

    return ["success" => $r, "dice" => $d];
}

$r =isJudge(12);
var_dump($r);
