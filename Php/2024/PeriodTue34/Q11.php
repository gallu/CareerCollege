<?php  // Q11.php
/*
以下の関数を作成しなさい。

関数名: mul
引数:
	int $i
	int $j
処理
	2つの引数を乗算（掛け算)する

戻り値
	処理の結果（掛け算の結果）

また、関数に適当な引数を与えて関数を動かし、戻り値をvar_dumpで出力しなさい。
 */
function mul(int $i, int $j): int {
	$r = $i * $j;
	return $r;

	// return $i * $j;
}
//
$r = mul(12, 34);
var_dump($r);
var_dump(mul(56, 78));

/*
以下のクラスを作成しなさい。

クラス名: Tech
プロパティ: なし
定数: なし
メソッド: なし

インスタンスを作成して、var_dumpで出力しなさい。
 */
class Tech {
}

$obj = new Tech();
// $obj = new Tech;
var_dump($obj);






