<?php  // loot_box3.php
//  http://dev2.m-fr.net/アカウント名/loot_box3.php
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
    // 「重みのトータル」から1つ選択する
    $i = mt_rand(1, 100);
    //
    $cards_key = array_keys($cards);
    // どれが選ばれたか、を判定する
    if ( (1 <= $i) && ($i <= 40) ) {
        $card = $cards_key[0];
    } else if ( (41 <= $i) && ($i <= 70) ) {
        $card = $cards_key[1];
    } else if ( (71 <= $i) && ($i <= 80) ) {
        $card = $cards_key[2];
    } else if ( (81 <= $i) && ($i <= 90) ) {
        $card = $cards_key[3];
    } else if ( (91 <= $i) && ($i <= 98) ) {
        $card = $cards_key[4];
    } else if ( (99 <= $i) && ($i <= 100) ) {
        $card = $cards_key[5];
    } else {
        $card = 'あり得ない';
    }

    return $card;
}

/*
$card = loot_box();
var_dump($card);
*/
// モンテカルロ法によるテスト
$data = [];
$rate = 1000000;
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
