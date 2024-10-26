<?php  // loot_box_2.php
require_once __DIR__ . "/loot_box_base.php";

function choiceLootBox(array $card_list) {
    $data = [];
    foreach($card_list as $c) {
        for($i = 0; $i < $c->probability; ++$i) {
            $data[] = $c;
        }
    }
    // var_dump($data);

    $count = count($data);
    $i = random_int(0, $count - 1);
    $card = $data[$i];

    return $card;
}

// $card_list = getCardList();
// var_dump($card_list);
// $card = choiceLootBox($card_list);
// var_dump($card);
