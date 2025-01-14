<?php  // Q17.php
/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

トレイト名: HogeTrait
プロパティ: なし
メソッド
	メソッド名: test
	引数: int
	戻り値: int
	処理: 
		引数の値を2倍にしてreturnする

クラス名: Hoge
使うトレイト: HogeTrait
プロパティ: なし
メソッド: なし

インスタンスを生成、testメソッドを呼び出して、戻り値をvar_dumpしなさい。
*/
trait HogeTrait {
	public function test(int $i): int {
		return $i * 2;
	}
}

class Hoge {
	use HogeTrait;
}

$obj = new Hoge();
$r = $obj->test(123);
var_dump($r);

var_dump($obj->test(123));


/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: HogeSt
プロパティ
	static int $num
static メソッド
	メソッド名: setNum
	引数: int
	戻り値: なし
	処理:
		staticプロパティ num に引数の値を代入する

	メソッド名: getNum
	引数: なし
	戻り値: int
	処理:
		staticプロパティ num の値をreturnする

setNumでデータを代入、getNumで得られた値をvar_dumpしなさい。
 */
class HogeSt {
	private static int $num;
	
	public static function setNum(int $i): void {
		self::$num = $i;
	}
	public static function getNum(): int {
		return self::$num;
	}
}

HogeSt::setNum(123);
$r = HogeSt::getNum();
var_dump($r);

var_dump(HogeSt::getNum());


