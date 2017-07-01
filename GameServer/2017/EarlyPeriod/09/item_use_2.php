<?php
// item_use_2.php
/**
 * アイテムを使う
 *
 * @param $item_effects string itemの効果情報(複数あり)
 * @param $pc object PCの情報
 */
require_once('./dice2.php');

function item_use_2($item_effects, $pc) {
    // 効果情報を単数に分解する
    $item_effect_array = explode('/', $item_effects);
    //
    foreach($item_effect_array as $item_effect) {
        // 情報を分解する
        $effect = explode(':', $item_effect);
//var_dump($effect);
        // 効果を適用する
        switch($effect[0]) {
            case 'hp_heal':
                $pc->heal_hp(dice::parse($effect[1]));
                break;
            case 'mp_heal':
                $pc->heal_mp(dice::parse($effect[1]));
                break;
            //
            default:
                throw new ErrorException("存在しない効果です！！({$effect[0]})");
        }
    }
}
