<?php  // loot_box_4.php
declare(strict_types=1);
require_once __DIR__ . "/loot_box_base.php";

function choiceLootBox(array $card_list) {
    // 「確率の合計」の計算
    $probabilityTotal = 0;
    foreach($card_list as $c) {
        $probabilityTotal += $c->probability;
    }
    // var_dump($probabilityTotal);

    // 乱数の作成
    $no = random_int(1, $probabilityTotal);
    // var_dump($no);

    // カードのチョイス
    $p = 0;
    foreach($card_list as $c) {
        $p += $c->probability;
        // var_dump($p);
        if ($no <= $p) {
            return $c;
        } 
    }
}

// $card_list = getCardList();
// $card = choiceLootBox($card_list);
// var_dump($card);
