<?php  // Q16.php

/*
簡単な「掲示板」システム用のクラスを作成します。

以下のクラスを作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Bbs1
プロパティ: 
	title string型
	body string型
定数: なし
メソッド: 
	コンストラクタ
	引数
		string型, string型
	処理
		プロパティに、引数の値を代入する

	メソッド名: getTitle
	引数: なし
	戻り値: プロパティ title の値

	メソッド名: getBody
	引数: なし
	戻り値: プロパティ body の値

適当な引数でインスタンスを生成しなさい。
２つのgetメソッドの戻り値を、echoかvar_dumpで出力しなさい。
 */
class Bbs1 {
	private string $title;
	private string $body;

	public function __construct(string $title, string $body) {
		$this->title = $title;
		$this->body = $body;
	}

	public function getTitle(): string {
		return $this->title;
	}
	public function getBody(): string {
		return $this->body;
	}
}

$bbs = new Bbs1("たいとる", "本文だよ");
echo $bbs->getTitle() , "<br>";
echo $bbs->getBody() , "<br>";

/*
簡単な「掲示板」システム用のクラスを作成します。

以下のクラスを作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Bbs2
	継承元クラス Bbs1

プロパティ
	string型 cookedFood
メソッド: 
	コンストラクタ
	引数
		string型, string型, string型
	処理
		親のコンストラクタを呼び出す
		プロパティcookedFood に、引数の値を代入する

	メソッド名: getCookedFood
	引数: なし
	戻り値: プロパティ cookedFood の値

適当な引数でインスタンスを生成しなさい。
3つのgetメソッドの戻り値を、echoかvar_dumpで出力しなさい。
 */
class Bbs2 extends Bbs1 {
	private string $cookedFood;

	public function __construct($title, $body, $cookedFood) {
		parent::__construct($title, $body);
		$this->cookedFood = $cookedFood;
	}

	public function getCookedFood(): string {
		return $this->cookedFood;
	}
}

$bbs = new Bbs2("たいとる", "ほんぶん", "りょうり");
echo $bbs->getTitle() , "<br>";
echo $bbs->getBody() , "<br>";
echo $bbs->getCookedFood() , "<br>";

/*
以下のインタフェース/クラスを作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

インタフェース名: HogeInterface
メソッド
	メソッド名: func
	引数: int型
	戻り値: なし

クラス名: Hoge
	継承元: HogeInterface
メソッド
	メソッド名: func
	引数: int型
	戻り値: なし
	処理
		引数の値をvar_dumpで出力

Hogeインスタンスを作成、func()メソッドを呼び出す。
 */
interface HogeInterface {
	public function func(int $i);
}

class Hoge implements HogeInterface {
	public function func(int $i) {
		var_dump($i);
	}
}

$obj = new Hoge();
$obj->func(123);



