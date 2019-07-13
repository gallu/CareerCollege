<?php  // item_use_2_main.php

require_once('./PC.php');
require_once('./dice.php');


function item_use_2_main(PC $pc, string $macro) {
	//
	$awk = explode(',', $macro);
	foreach($awk as $m) {
		//
		list($param, $num) = explode('+', $m, 2);
		//
		if ('HP' === $param) {
			$pc->healHP(dice($num));
		}
		if ('MP' === $param) {
			$pc->healMP(dice($num));
		}
	}
}








