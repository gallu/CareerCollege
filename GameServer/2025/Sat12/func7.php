<?php  // func7.php

echo "<pre>";

/*
hash配列を作成しなさい。keyは「str」「dex」「iq」「vit」とします。
値は、それぞれ3d6を代入しなさい。
作成したhash配列をprint_rで出力しなさい。
*/
$pc = [];
$pc["str"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
$pc["dex"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
$pc["iq"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
$pc["vit"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
print_r($pc);
/*
命中判定を実装します。命中判定は「2d6+DEXボーナス」が10以上なら「命中」、9以下なら「ミス」とします。
*/
$dex_bonus = intval(floor($pc["dex"] / 3));
$hit = random_int(1, 6) + random_int(1, 6) + $dex_bonus;
if ($hit >= 10) {
    echo "命中 <br>\n";
} else {
    echo "ミス <br>\n";
}

/*
「PCデータを作る」関数を作成しなさい。
関数名は「makePC」。
処理は
    hash配列を作成しなさい。keyは「str」「dex」「iq」「vit」とします。
    値は、それぞれ3d6を代入しなさい。
戻り値は、上述のhash配列

makePCを使ってPCデータを作成、print_rで出力しなさい。
*/
function makePC() {
    $pc = [];
    $pc["str"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
    $pc["dex"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
    $pc["iq"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);
    $pc["vit"] = random_int(1, 6) + random_int(1, 6) + random_int(1, 6);

    return $pc;
}
//
$pc = makePC();
print_r($pc);

/*
命中判定
*/
function calBonus($param) {
    $r = intval(floor($param / 3));
    return $r;
}
function isHit($pc) {
    $r = random_int(1, 6) + random_int(1, 6) + calBonus($pc["dex"]);
    if ($r >= 10) {
        return true;
    } else {
        return false;
    }
    // return $r >= 10;
}
//
$hit = isHit($pc);
if ($hit === true) {
    echo "命中 <br>\n";
} else {
    echo "ミス <br>\n";
}


