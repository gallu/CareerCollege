<?php
// item_use_1.php
/**
 * アイテムを使う
 *
 * @param $item_id int アイテムのID
 * @param $pc object PCの情報
 */
require_once('./dice2.php');

function item_use_1($item_id, $pc) {
    //
    switch($item_id) {
        // HP小回復
        case 1:
            $pc->heal_hp(10);
            break;
        // HP大回復
        case 2:
            $pc->heal_hp(100);
            break;
        // HP小回復(2)
        case 3:
            $pc->heal_hp(dice::parse('2d10'));
            break;
        // HP大回復(2)
        case 4:
            $pc->heal_hp(dice::parse('20d10'));
            break;
        // MP小回復
        case 101:
            $pc->heal_mp(10);
            break;
        // MP大回復
        case 102:
            $pc->heal_mp(100);
            break;
        // HP&MP小回復
        case 501:
            $pc->heal_hp(50);
            $pc->heal_mp(50);
            break;
        // HP&MP大回復
        case 502:
            $pc->heal_hp(500);
            $pc->heal_mp(500);
            break;

        //
        default:
            throw new ErrorException("存在しないアイテムです！！({$item_id})");
    }
}
