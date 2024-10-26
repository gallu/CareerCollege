<?php  // loot_box_3.php
declare(strict_types=1);
require_once __DIR__ . "/loot_box_base.php";

function choiceLootBox(array $card_list) {
    $no = random_int(1, 100);
    // var_dump($no);
    
    if ($no <= 40) {
        return $card_list[0];
    } elseif ($no <= (40+30)) {
        return $card_list[1];
    } elseif ($no <= (40+30+15)) {
        return $card_list[2];
    } elseif ($no <= (40+30+15+10)) {
        return $card_list[3];
    } elseif ($no <= (40+30+15+10+4)) {
        return $card_list[4];
    } elseif ($no <= (40+30+15+10+4+1)) {
        return $card_list[5];
    }
}

// $card_list = getCardList();
// $card = choiceLootBox($card_list);
// var_dump($card);
