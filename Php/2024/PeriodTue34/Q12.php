<?php  // Q12.php
/*
以下のクラスを作成しなさい。

クラス名: Exam
プロパティ: なし
定数: なし
メソッド: なし

インスタンスを作成して、var_dumpで出力しなさい。
 */
class Exam {
}
$obj = new Exam();
// $obj = new Exam;
var_dump($obj);

/*
以下のクラスを作成しなさい。

クラス名: Exam2
プロパティ: public num int型
定数: なし
メソッド: なし

インスタンスを作成して、プロパティ num に好きな数値を代入して、var_dumpで出力しなさい。
 */
class Exam2 {
	public int $num;
}
$obj = new Exam2();
$obj->num = 123;
var_dump($obj);

/*
以下のクラスを作成しなさい。

クラス名: Exam3
プロパティ: なし
定数: なし
メソッド: 
	メソッド名: test
	引数: なし
	戻り値: 文字列 "hello"
	処理
		文字列"in test"をechoで出力

インスタンスを作成して、メソッド test() を呼び出しなさい。
また、test()の戻り値を受け取り、var_dump()で出力しなさい
 */
class Exam3 {
	public function test() {
		echo "in test";

		return "hello";
	}
}
$obj = new Exam3();
$r = $obj->test();
var_dump($r);

/*
以下のクラスを作成しなさい。

クラス名: Exam4
プロパティ: なし
定数: なし
メソッド: 
	コンストラクタ
	引数: なし
	処理
		文字列"in Exam4"をechoで出力

インスタンスを作成して、コンストラクタを実行させなさい。
 */
class Exam4 {
	public function __construct() {
		echo "in Exam4";
	}
}
$obj = new Exam4();

/*
以下のクラスを作成しなさい。

クラス名: Exam5
プロパティ: private num int型 初期値 777
定数: なし
メソッド: 
	メソッド名: getNum
	引数: なし
	戻り値: int型
	処理
		プロパティ num  の値を戻り値にする

インスタンスを作成して、メソッド getNum() を呼び出し、得られた値を、var_dump()で出力しなさい
 */
class Exam5 {
	private int $num = 777;

	public function getNum() {
		return $this->num ;
	}
}
$obj - new Exam5();
$r = $obj->getNum();
var_dump($r);

/*
以下のクラスを作成しなさい。

クラス名: Exam6
プロパティ: private num int型
定数: なし
メソッド: 
	コンストラクタ
	引数: int
	処理
		引数の値を、プロパティ num に代入する

	メソッド名: getNum
	引数: なし
	戻り値: int型
	処理
		プロパティ num  の値を戻り値にする

インスタンスを作成して、メソッド getNum() を呼び出し、得られた値を、var_dump()で出力しなさい
 */
class Exam6 {
	private int $num;

	public function __construct(int $i) {
		$this->num = $i;
	}

	public function getNum() {
		return $this->num ;
	}
}
$obj - new Exam6(987);
$r = $obj->getNum();
var_dump($r);






