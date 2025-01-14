<?php  // Q21.php

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Hoge1
プロパティ: なし
メソッド: 
	static メソッド名: func
	引数: int, int
	戻り値: int
	処理
		ふたつの引数を掛け算して、その結果を戻り値にする

funcメソッドを呼び出し、戻り値をvar_dump()しなさい。
 */
class Hoge1 {
	public static function func(int $i, int $j): int {
		$r = $i * $j;
		return $r;
	}
}
$r = Hoge1::func(12, 34);
var_dump($r);

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Hoge2
プロパティ:
	static int型 num
メソッド: 
	static メソッド名: setNum
	引数: int
	戻り値: なし
	処理
		引数の値を、staticプロパティ num に代入する

	static メソッド名: getNum
	引数: なし
	戻り値: int
	処理
		staticプロパティ num の値を返す

setNumで値を設定し、getNumで取得(var_dumpで出力)しなさい。
 */
class Hoge2 {
	private static int $num;

	public static function setNum(int $i): void {
		self::$num = $i;
	}
	public static function getNum(): int {
		return self::$num;
	}
}
//
Hoge2::setNum(123);
$r = Hoge2::getNum();
var_dump($r);



