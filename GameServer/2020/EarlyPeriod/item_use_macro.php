<?php  // item_use_macro.php

require_once('./dice.php');

// 残作業
// マイナスの処理
// 「複数のエフェクト」の処理
// XXX STR増強ポーションとか

/*
 'HP:+10'   HPを10点回復
 'HP:+4d8'  HPを4ｄ8点回復
 'HP:+9999' HPを全回復
 'MP:+5'    MPを5点回復
 'MP:+20%'  MPを"最大MPの2割"回復
 'HP:-10/MP+10' HPに10点のダメージ、MPを10点回復
 */
function item_use_macro($pc, string $item_macro) {
    //
    $awk = explode(',', $item_macro);
    foreach($awk as $m) {
        item_use_macro_mono($pc, $m);
    }
}
//
function item_use_macro_mono($pc, string $item_macro) {
//var_dump($item_macro);
    // 「対象」と「数値」に分解
    list($target, $num) = explode(':', $item_macro, 2);
//var_dump($target, $num);

    // エフェクト
    switch($target) {
        case 'HP':
            $m = 'healHp';
            $max_m = 'getMaxHp';
            break;

        case 'MP':
            $m = 'healMp';
            $max_m = 'getMaxMp';
            break;

        default:
            throw new \Exception("{$item_macro}が判別できません orz");
            break;
    }
    // 値が＋なのか-なのかを判定
    if ('-' === $num[0]) {
        $sign = '-';
    } else {
        $sign = '+';
    }
    $num = ltrim($num, '-+');

    //
    if ('%' === $num[ strlen($num) - 1]) {
        // 後ろの％を取って
        $num = rtrim($num, '%');
        // 最大値を取得して
        $max = $pc->$max_m();
        // 百分率として計算
        $i = intval($max * $num / 100);
    } else {
        // 値を取得
        $i = dice($num);
    }
//var_dump($num, $i);
    // 値がマイナスなら$iを反転
    if ('-' === $sign) {
        $i *= -1;
    }

    // 値を適用
    $pc->$m($i);
}

