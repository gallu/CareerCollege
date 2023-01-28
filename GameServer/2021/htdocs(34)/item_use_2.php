<?php   // item_use_2.php
//  https://dev2.m-fr.net/アカウント名/item_use_2.php
require_once( __DIR__ . '/PC.php');
require_once( __DIR__ . '/dice.php');

$pc = new PC();
$pc->debugPrint();

//use_item($pc, 'HP:+10');
//use_item($pc, 'HP:+3d8');
//use_item($pc, 'MP:+12');
use_item($pc, 'Hp:+2d6, MP:+20');
//use_item($pc, 'HP:-10, MP:+2d10');
$pc->debugPrint();

function use_item($pc, $item_effect) {
    // 全体的に「大文字」にしておく
    $item_effect = strtoupper($item_effect);
    
//var_dump($item_effect); exit;
    // 「効果群」を、効果に分解
    $effects = explode(',', $item_effect);
//var_dump($effects); exit;
    foreach($effects as $mono_effect) {
        //
        $mono_effect = trim($mono_effect);
//var_dump($mono_effect);

        // 効果を分解
        $datum = explode(':', $mono_effect);
//var_dump($datum); exit;

        // 効果の適用
        if ('HP' === $datum[0]) {
            // HP回復系
            //$pc->healHp( intval($datum[1]) );
            $pc->healHp( dice($datum[1]) );
        } else if ('MP' === $datum[0]) {
            // MP回復系
            $pc->healMp( dice($datum[1]) );
        } else {
            // typo用
            echo "{$datum[0]} なんて効果関数はねぇ！！\n";
            exit;
        }
    }    
}


