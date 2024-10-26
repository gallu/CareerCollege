<?php  // Q10.php
/*
関数名: mul
引数
	int型
	int型
処理
	ふたつの引数を掛け算する
戻り値
	"ふたつの引数を掛け算する"処理の結果を戻り値とする

上述の関数を作成しなさい。
また、適当な引数で関数を呼び出して、戻った値をvar_dumpで出力しなさい。
 */
function mul(int $i, int $j) {
	$r = $i * $j;
	return $r;
}
$r = mul(12, 34);
var_dump($r);

