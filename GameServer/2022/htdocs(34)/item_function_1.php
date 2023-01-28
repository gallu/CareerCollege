<?php  // item_function_1.php

function item_function($pc, $item) {
    //
    switch($item["item_id"]) {
        // ポーション: 1d6回復
        case 1:
            $pc->healHp(dice("1d6"));
            break;

        // ハイポーション
        case 2:
            $pc->healHp(dice("3d6"));
            break;
        
        case 3:
            $pc->healHp(999999);
            break;

        case 4:
            $pc->healMp(dice("1d6"));
            break;

        case 5:
            $pc->healMp(dice("3d6"));
            break;

        case 6:
            $pc->healMp(999999);
            break;

        case 7:
            $pc->healHp(dice("1d6"));
            $pc->healMp(dice("1d6"));
            break;
    }
}
