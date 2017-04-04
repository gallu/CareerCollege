<?php
// use_item_macro.inc

/*
 * 「アイテムを使う」関数
 *
 * @param object $pc PCのインスタンス
 * @param string $item_macro 使うアイテムのマクロ文字列
 */
function use_item($pc, $item_macro) {
    // マクロを「マクロ単体」に分解する
    $awk = explode(',', $item_macro);
    foreach($awk as $m) {
        // 「アイテムを使う(単体)」を呼ぶ
        use_item_mono($pc, $m);
    }
}

// 実際にエフェクトを発生させる関数
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
