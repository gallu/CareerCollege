<?php  // func6.php

/*
DEXを作成しなさい。DEXは、「random_int(1, 6)」を３回足す(3d6)で求められる、とします。
また、DEXボーナスを作成しなさい。ボーナスは「DEX÷3(端数切捨て)」とします。
命中判定を実装します。命中判定は「2d6+DEXボーナス」が10以上なら「命中」、9以下なら「ミス」とします。
*/
// DEXの決定
$dex = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
// ボーナスの決定
$dex_bonus = intval(floor($dex / 3));

// 2d6+ボーナスが10以上なら「命中」、そうでなければ「ミス」
$hit = random_int(1, 6) + random_int(1, 6) + $dex_bonus;
if ($hit >= 10) {
    echo "命中 <br>\n";
} else {
    echo "ミス <br>\n";
}

/*
「能力値を1つ作成する」関数を作成しなさい。
関数名は「makeParameters」。引数はなし、戻り値は「random_int(1, 6)を３回足す(3d6)、の値」とします。
「能力値のボーナスを計算する」関数を作成しなさい。
関数名は「calBonus」。引数は「対象の能力値」、戻り値は「引数÷3(端数切捨て)」とします。

「命中判定」関数を作成しなさい。
関数名は「isHit」。引数は「DEXパラメタ値」。処理は「2d6+DEXボーナスを計算」。
戻り値は、処理の結果が10以上ならtrue、9以下ならfalse。

上述関数を使って「DEX値の作成」「命中判定」を行い、命中判定がtrueなら「命中」、falseなら「ミス」をechoで出力しなさい。
*/
function makeParameters() {
    $r = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
    return $r;
}
function calBonus($param) {
    $r = intval(floor($param / 3));
    return $r;
}
function isHit($dex) {
    $r = random_int(1, 6) + random_int(1, 6) + calBonus($dex);
    if ($r >= 10) {
        return true;
    } else {
        return false;
    }
    // return $r >= 10;
}
//
$dex = makeParameters();
$hit = isHit($dex);
if ($hit === true) {
    echo "命中 <br>\n";
} else {
    echo "ミス <br>\n";
}
