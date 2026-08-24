<?php  // wiz.php
require_once __DIR__ . "/dice.php";

// 基本値が5〜9（1d5+4）ポイント
function getBonus() {
	$point = dice("1d5") + 4;

	//
	// while(true) {
		// $d = dice("1d20");
		// if ($d !== 1) {
			// break;
		// }
		// $point += dice("1d5");
	// }
	while(dice("1d20") === 1) {
		echo "  -> hit <br>";
		$point += dice("1d5");
	}

	return $point;
}

// 
for ($i = 0; $i < 15; ++$i) {
	$bonus = getBonus();
	echo "ボーナスは {$bonus}ポイントです <br>";
}
