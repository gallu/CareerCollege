<?php  // judge4.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

/*
(GURPSの判定)
3d6を振る
ダイス目 が目標値以下なら成功
ダイス目 が目標値を超えたら失敗
*/
function isJudge(int $目標値) {
    //
    $d = dice("3d6");
    $r = $d <= $目標値;

    return ["success" => $r, "dice" => $d];
}


$r =isJudge(12);
var_dump($r);

