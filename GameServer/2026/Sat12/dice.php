<?php  // dice.php

function dice($base_string) {
	// Dで入ってきたときにdに変換する
	$base_string = strtolower($base_string);
	// 分解する
	$arr = explode("d", $base_string);

	// 気になるなら
	if (count($arr) !== 2) {
		echo "エラー";
		return 0; // XXXXXX 本来なら「例外を投げる」とか
	}

	$times = (int)$arr[0];
	$dice_max = (int)$arr[1];

	$r = 0;
	for ($i = 0; $i < $times; ++$i) {
		// $r = $r + random_int(1, $dice_max);
		$r += random_int(1, $dice_max);
	}
	//
	return $r;
}
