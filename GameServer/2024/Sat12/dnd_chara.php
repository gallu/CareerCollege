<?php  // dnd_chara.php
// https://dev2.m-fr.net/アカウント名/dnd_chara.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

function makePc() {
    $pc = [
        "str" => 0,
        "int" => 0,
        "wiz" => 0,
        "dex" => 0,
        "con" => 0,
        "chr" => 0,
    ];
    //
    $pc["str"] = dice("3d6");
    $pc["int"] = dice("3d6");
    $pc["wiz"] = dice("3d6");
    $pc["dex"] = dice("3d6");
    $pc["con"] = dice("3d6");
    $pc["chr"] = dice("3d6");

    return $pc;
}

/*
3       -3
4-5     -2
6-8     -1
9-12    0
13-15   +1
16-17   +2
18      +3
 */
function getBonus($v) {
    //
    if ($v <= 3) {
        return -3;
    } elseif ($v <= 5) {
        return -2;
    } elseif ($v <= 8) {
        return -1;
    } elseif ($v <= 12) {
        return 0;
    } elseif ($v <= 15) {
        return 1;
    } elseif ($v <= 17) {
        return 2;
    } else {
        return 3;
    }
}

function printPc($pc) {
    foreach($pc as $k => $v) {
        $b = getBonus($v);
        echo "{$k}:{$v}({$b}), ";
    }
    echo "<br> \n";
}

// 攻撃が命中したかどうか？
// 戻り値がtrueなら命中、falseならハズレ
function isHit($offense_pc, $defense_ac) {
    $tac0 = 19; // AC0の時に必要な出目

    $必要な出目 = $tac0 - $defense_ac;
    $出目 = dice("1d20");
    $ボーナス = getBonus($offense_pc["str"]);
    $r = ($出目 + $ボーナス) >= $必要な出目;

    return ["hit" => $r, "出目" => $出目];
}

$pc = makePc();
printPc($pc);

$r = isHit($pc, 5);
echo "{$r['出目']}: ";
if (true === $r["hit"]) {
    echo "攻撃命中 <br>\n";
} else {
    echo "攻撃ミス orz <br>\n";
}
