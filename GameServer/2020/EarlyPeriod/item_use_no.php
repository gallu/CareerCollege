<?php  // item_use_no.php
require_once('./dice.php');

/*
 1: HPを10点回復
 2: HPを4ｄ8点回復
 3: HPを全回復
 4: MPを5点回復
 5: MPを"最大MPの2割"回復
 6: HPを10点、MPを10点回復
 */
function item_use_no($pc, int $item_no) {
    //
    switch($item_no) {
        case 1:
            $pc->healHp(10);
            break;

        case 2:
            $pc->healHp(dice('4d8'));
            break;
            
        case 3:
            $pc->healHp(999999); // XXX
            break;
            
        case 4:
            $pc->healMp(5);
            break;

        case 5:
            $i = intval($pc->getMaxMp() * 0.2);
            $pc->healMp($i);
            break;

        case 6:
            $pc->healHp(10);
            $pc->healMp(10);
            break;

        default:
            throw new \Exception("{$item_no}なんてアイテムは、ないよ？");
            break;
    }
}




