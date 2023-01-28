<?php  // loot_box4.php
//  http://dev2.m-fr.net/アカウント名/loot_box4.php
// 
function loot_box() {
    $cards = [
        // カード名 => 重み(出現確率)
        'スライム' => 400,
        'ゴブリン' => 300,
        'スケルトン' => 100,
        'オーク' => 100,
        'マジックユーザ' => 98,
        'ドラゴン' => 2,
    ];
    // 「重みのトータル」から1つ選択する
    $max = array_sum($cards);
    $i = mt_rand(1, $max);

    //
    $start = 1;
    $card = 'あり得ない';
    foreach($cards as $k => $v) {
        $end = $start + $v;
        if ( ($start <= $i) && ($i < $end) ) {
            $card = $k;
            break;
        }
        // 次
        $start = $end;
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
