<?php  // Q18.php
declare(strict_types=1);

/*
 * 以下の関数を作成しなさい
関数名:isOdd
引数: int型
戻り値: bool型
処理：引数が「奇数」ならtrueを返す。引数が「偶数」ならfalseを返す

関数を作成し、適当な引数で実際に動かして戻り値をvar_dumpで出力しなさい。
 */
function isOdd(int $i): bool {
	if ($i%2 === 1) {
		return true;
	} else {
		return false;
	}

	// return $i%2 === 1;
}
$r = isOdd(123);
var_dump($r);

/*
以下の関数を作成しなさい
関数名: isAdult
引数: int型
戻り値: bool型
処理： 引数の数値が19以下ならfalseを、20以上ならtrueを返す

関数を作成し、適当な引数で実際に動かして戻り値をvar_dumpで出力しなさい。
 */
function isAdult(int $i): bool {
	if ($i <= 19) {
		return false;
	} else {
		return true;
	}

	// return $i >= 20;
}
$r = isAdult(19);
var_dump($r);

/*
以下の関数を作成しなさい
関数名: cal
引数: int型 税抜き単価, int型 数量
戻り値: int型
処理： 「税抜き単価＊数量」＊1.1(消費税込みにする)の値を計算し、戻り値とする

関数を作成し、適当な引数で実際に動かして戻り値をvar_dumpで出力しなさい。
 */
function cal(int $price, int $quantity): int {
	$r = $price * $quantity * 1.1;
	// return (int)$r;
	// return (int)floor($r);
	// return (int)ceil($r);
	return (int)round($r);
}
$r = cal(99, 1);
var_dump($r);

