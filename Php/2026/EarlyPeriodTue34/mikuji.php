<?php  // mikuji.php
//
function mikuji() {
    // おみくじの塊を作る
    $mikuji_box = [
        "大吉",
        "中吉",
        "吉",
        "小吉",
        "末吉",
        "凶",
        "大凶",
    ];
    // 1つチョイスする
    $count = count($mikuji_box);
    $key = random_int(0, $count-1);
    // 文言を把握する
    $mikuji = $mikuji_box[$key];
    
    return $mikuji;
}
// おみくじを引く
$mikuji = mikuji();

echo "あなたの今日の運勢は {$mikuji} です!!";
