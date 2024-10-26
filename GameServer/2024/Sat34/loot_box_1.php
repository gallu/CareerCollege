<?php  // loot_box_1.php
declare(strict_types=1);
require_once __DIR__ . "/loot_box_base.php";

function choiceLootBox(array $card_list) {
    $count = count($card_list);
    $i = random_int(0, $count - 1);
    $card = $card_list[$i];

    return $card;
}

// $card_list = getCardList();
// var_dump($card_list);
// $card = choiceLootBox($card_list);
// var_dump($card);
