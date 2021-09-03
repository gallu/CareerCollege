<?php   // item_use_1.php
require_once( __DIR__ . '/PC.php');
require_once( __DIR__ . '/dice.php');

$pc = new PC();
$pc->debugPrint();
/*
$pc->healHp(100);
$pc->healMp(500);
$pc->debugPrint();
*/
//
//use_item($pc, 4);
use_item($pc, 5);
$pc->debugPrint();

/*
1: HP　10点回復
2: MP　12点回復
3: HP　3d8点回復
4: HP 全回復
5: HP/MP回復
 */
function use_item($pc, $item_no) {
    if (1 === $item_no) {
        $pc->healHp(10);
    } else if (2 === $item_no) {
        $pc->healMp(12);
    } else if (3 === $item_no) {
        $pc->healHp( dice('3d8') );
    } else if (4 === $item_no) {
        $pc->healHp( PHP_INT_MAX ); // あふれさせる
        //$pc->fullHealHp(); // 専用のメソッドを作る
    } else if (5 === $item_no) {
        $pc->healHp( dice('2d12') );
        $pc->healMp( dice('2d12') );
    } else {
        // なんか大きくエラーを出す
    }
}



