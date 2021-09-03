<?php  // dice.php
// https://dev2.m-fr.net/アカウント名/dice.php

// サイコロを振る関数
function dice($dice_string) {
//var_dump( $dice_string );
	//　Dは小文字に揃える
	$dice_string = strtolower($dice_string);
	// 「先頭１文字目がd」なら、１を追加する
	if ('d' === $dice_string[0]) {
		$dice_string = '1' . $dice_string;
	}
	// dで分解
	$awk = explode('d', $dice_string);
    // 文字列に'd'がなければ、そのままreturnする
    if (1 === count($awk)) {
        return intval($awk[0]);
    }

	// 値を入れる(数値にしておく)
	$left_num = intval($awk[0]);
	$right_num = intval($awk[1]);
//var_dump( $left_num, $right_num );

	// 「左の数字」回、loopする
	$total = 0;
	for($i = 0; $i < $left_num; $i ++) {
		//echo $i , " : ";
		//　１～「右の数字」の乱数を作る
		$r = random_int(1, $right_num);
		//echo $r , "<br>\n";
		// 合計を計算する
		$total = $total + $r;
		//$total += $r;
	}
	// 戻り値(出力）
	return $total;
}

/*
// テスト
$r = dice('3d6');
echo  $r  , '<br>';
//
$r = dice('4D10');
echo  $r  , '<br>';
//
$r = dice('d10');
echo  $r  , '<br>';
//
$r = dice('10');
echo  $r  , '<br>';
*/











