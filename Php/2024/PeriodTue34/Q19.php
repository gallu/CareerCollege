<?php  // Q19.php
declare(strict_types=1);

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Hoge
プロパティ: int型 num
メソッド:
	コンストラクタ
	引数: int
	処理: 引数の値をプロパティ num に代入する

インスタンスを生成し、var_dumpしなさい。
 */
class Hoge {
	private int $num;
	public function __construct(int $i) {
		$this->num = $i;
	}
}
//
$obj = new Hoge(123);
var_dump($obj);

/*
以下のクラス等を作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Hoge2
プロパティ: 
	string型 name
	bool型 flg
メソッド:
	コンストラクタ
	引数: string型, bool型
	処理: 引数の値をプロパティに代入する

インスタンスを生成し、var_dumpしなさい。
 */
class Hoge2 {
	private string $name;
	private bool $flg;

	public function __construct(string $name, bool $flg) {
		$this->name = $name;
		$this->flg = $flg;
	}
}
$obj = new Hoge2("hello", true);
var_dump($obj);








