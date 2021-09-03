<?php   // dice.php
declare(strict_types=1);
// https://dev2.m-fr.net/アカウント名/dice.php
//
function dice($dice_string) {
	// 小文字にそろえる
	$dice_string = strtolower($dice_string);

	// 「d6」とかの表記なら、先頭に１を加える
	if ('d' === $dice_string[0]) {
		$dice_string = '1' . $dice_string;
	}
	
	// 文字を分解する
	$awk = explode('d', $dice_string);
    // 「dがない数字だけ」ならとっととreturnする
    if (1 === count($awk)) {
        return intval($awk[0]);
    }

	// 「数字」を「数値」にする
	$lest_num = intval($awk[0]);
	$right_num = intval($awk[1]);
//var_dump($lest_num, $right_num);

	// 「左の値」回、loopする
	$total = 0;
	for($i = 0; $i < $lest_num; ++$i) {
		//echo "{$i} : ";
		// １～「右の値」の乱数を作る
		$r = random_int(1, $right_num);
		//echo "{$r} <br>\n";
		// 合計する
		//$total = $total + $r;
		$total += $r;
	}
	//
	return $total;
}

/*
// さいころを振る
$r = dice('3d6');
echo "{$r} <br>\n";

$r = dice('4D12');
echo "{$r} <br>\n";

$r = dice('d6');
echo "{$r} <br>\n";

$r = dice('10');
echo "{$r} <br>\n";
*/



