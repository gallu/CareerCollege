<?php // item_use_1_main.php

require_once('./PC.php');

/*
1: HP 100回復
2：　MP　100回復
3：　HP50、MP50回復
4：　HP999、MP999回復
 */
function item_use_1_main(PC $pc, int $item_no) {
	//
	switch($item_no) {
		case 1:
			$pc->healHP(100);
			break;

		case 2:
			$pc->healMP(100);
			break;

		case 3:
			$pc->healHP(50);
			$pc->healMP(50);
			break;

		case 4:
			$pc->healHP(999);
			$pc->healMP(999);
			break;

		default:
			echo "そんな　item_no( {$item_no} )　ありません！！";
			break;
	}
}







