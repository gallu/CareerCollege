<?php   // use_item_2.php
//   https://dev2.m-fr.net/アカウント名/use_item_2.php
require_once( __DIR__ . '/PC.php');
require_once( __DIR__ . '/dice.php');

$pc = new PC();
//$pc->debugPrint();
//
$pc->damage(100);
$pc->useMp(100);
$pc->debugPrint();

// HP回復ポーションを使う
//use_item($pc, 'HP:+2d6');
//use_item($pc, 'HP:+5');
//use_item($pc, 'MP:+5');
//use_item($pc, 'MP:+3d4');
use_item($pc, 'Hp:+2d8 , mp:+2d8');
$pc->debugPrint();


// アイテムを使う
function use_item($pc, $item_effect) {
//var_dump($item_effect); exit;
    // 一旦「全部大文字」に寄せる
    $item_effect = strtoupper($item_effect);

    // エフェクトの塊を「エフェクト」単位で切り出す
    $effects = explode(',', $item_effect);
//var_dump($effects); exit;

    // 各エフェクトに対して処理をする
    foreach($effects as $mono_effect) {
        // 余計なスペースは削除
        $mono_effect = trim($mono_effect);
//var_dump($mono_effect);

        // 要素を分解
        $datum = explode(':', $mono_effect);
//var_dump($datum); exit;
//var_dump($datum[1]);

        //
        if ('HP' === $datum[0]) {
            // HP回復薬系
            //$pc->heal( intval($datum[1]) );
            $pc->heal( dice($datum[1]) );
        } else if ('MP' === $datum[0]) {
            // MP回復薬系
            //$pc->healMp( intval($datum[1]) );
            $pc->healMp( dice($datum[1]) );
        } else {
            // typo用
            echo "{$datum[0]} なんて効果関数はねぇ！！\n";
            exit;
        }

    }
}









