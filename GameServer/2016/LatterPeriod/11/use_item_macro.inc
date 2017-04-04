<?php
// use_item_macro.inc

/*
 * 「アイテムを使う」関数
 *
 * @param object $pc PCのインスタンス
 * @param string $item_macro 使うアイテムのマクロ文字列
 */
function use_item($pc, $item_macro) {
    // マクロ文字列を「個々のエフェクト」に分解する
    $awk = explode(',', $item_macro);
    // 「個々のエフェクト」ごとに処理する
    foreach($awk as $mono) {
        use_item_mono($pc, $mono);
    }
}

function use_item_mono($pc, $item_macro_mono) {
    // 「効果タイプ」と「効果値」を分解
    $awk = explode(':', $item_macro_mono);

    // 「効果タイプ」に合わせてエフェクト処理
    switch($awk[0]) {
        case 'HP回復':
            $pc->heal_hp($awk[1]);
            break;
        case 'MP回復':
            $pc->heal_mp($awk[1]);
            break;
        default:
            break;
    }
}
