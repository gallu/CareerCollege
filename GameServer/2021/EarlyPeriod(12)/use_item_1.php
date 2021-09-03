<?php   // use_item_1.php
//  https://dev2.m-fr.net/アカウント名/use_item_1.php
require_once( __DIR__ . '/PC.php');
require_once( __DIR__ . '/dice.php');

$pc = new PC();
//$pc->debugPrint();
//
$pc->damage(100);
$pc->useMp(100);
$pc->debugPrint();

/*
// HP回復ポーションを使う
use_item($pc, 3);
$pc->debugPrint();
// MP回復ポーションを使う
use_item($pc, 2);
$pc->debugPrint();
*/
$items = [
    1 => '傷薬',
    2 => 'レッサーエリクサー',
    3 => '水薬',
    4 => 'エクストラポーション',
    5 => 'エリクサー',
];
$item_no = random_int(1, 5);
echo $items[$item_no] , "を使った！！<br>\n";
use_item($pc, $item_no);
$pc->debugPrint();


// 「アイテムを使う」関数本体
/*
1: HP 5点回復(傷薬)
2: MP 5点回復(レッサーエリクサー)
3: HP 2d6点回復(水薬)
4: HP 全回復(エクストラポーション)
5:　HP 2d8, MP 2d8 回復(エリクサー)
 */
function use_item($pc, $item_no) {
    //
    if (1 === $item_no) {
        // 1: HP 5点回復
        $pc->heal(5);
    } else if (2 === $item_no) {
        // 2: MP 5点回復
        $pc->healMp(5);
    } else if (3 === $item_no) {
        // 3: HP 2d6点回復
        $pc->heal( dice('2d6') );
    } else if (4 === $item_no) {
        // 4: HP 全回復(エクストラポーション)
        $pc->heal(99999); //　カンストさせる
        //$pc->fullHeal(); // 別メソッドを切る
    } else if (5 === $item_no) {
        // 5:　HP 2d8, MP 2d8 回復(エリクサー)
        $pc->heal( dice('2d8') );
        $pc->healMp( dice('2d8') );
    } else {
        // XXX 内部用エラー処理
    }
}

