<?php  // loot_box2.php
//  http://dev2.m-fr.net/アカウント名/loot_box2.php
// 
function loot_box() {
    $cards = [
        // カード名 => 重み(出現確率)
        'スライム' => 40,
        'ゴブリン' => 30,
        'スケルトン' => 10,
        'オーク' => 10,
        'マジックユーザ' => 8,
        'ドラゴン' => 2,
    ];
    //
    $awk = [];
    foreach($cards as $k => $v) {
        for($i = 0; $i < $v; ++$i) {
            $awk[] = $k;
        }
    }
    //var_dump($awk);
    $card = $awk[ mt_rand(0, count($awk)-1 ) ];
    //var_dump($card);
    return $card;
}
//$card = loot_box();
//var_dump($card);

// モンテカルロ法によるテスト
$data = [];
$rate = 10000;
for($i = 0; $i < $rate; ++$i) {
    // カードを引く
    $card = loot_box();
    // カウントする
    @$data[$card] ++;
}
arsort($data);
//var_dump($data);
foreach($data as $k => $v) {
    printf("%s:%.2f <br>\n", $k, $v / $rate * 100);
}











