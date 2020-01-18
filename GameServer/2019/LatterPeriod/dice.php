<?php  // dice.php

// ダイス記法全体の処理
function dice($s) {
	// ＋の前後の空白は、下でtrimする
	$list = explode('+', $s);
	//
	$total = 0;
	foreach($list as $l) {
		$total += dice_mono(trim($l));
	}
	//
	return $total;
}

// nDm １つ分のダイスの処理
function dice_mono($s) {
	// dを小文字にそろえる
	$s = strtolower($s);
	// 先頭１文字目がdなら、フォーマットを整える
	if ('d' === $s[0]) {
		$s = '1' . $s;
	}
	// 文字列にdがなかったら、値をそのまま返す
	if (false === strpos($s, 'd')) {
		return intval($s);
	}

    // 「nDm」の、nとmを取得する
	$awk = explode('d', $s);
	$n = $awk[0];
	$m = $awk[1];
	// list($n, $m) = explode('d', $s);
	
	// n回のループ
	$total = 0;
	for($i = 0; $i < $n; ++$i) {
		// m面ダイスを振る
		$total += mt_rand(1, $m);
	}
	// 値を返す
	return $total;
}

/*
// 使い方
$i = dice('2d6');
var_dump($i);
$i = dice('3D10');
var_dump($i);

$i = dice('d6');
var_dump($i);

$i = dice('1d4 + 2d6');
var_dump($i);

$i = dice('2d6 + 5');
var_dump($i);
*/

 
 