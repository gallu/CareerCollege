<?php  // Q15.php

/*
ECサイトを作ります。
「１つの商品」を表すクラスを作成します。

以下のクラスを作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

クラス名: Item1
プロパティ: 
	name string型 商品名
	price int型 金額
定数: なし
メソッド: 
	コンストラクタ
	引数
		int型, string型
	処理
		プロパティに、引数の値を代入する

	メソッド名: getPrice
	引数: なし
	戻り値: プロパティ priceの値

	メソッド名: getName
	引数: なし
	戻り値: プロパティ nameの値
 */
class Item1 {
	private string $name; // 商品名
	private int $price; // 金額

	public function __construct(int $price, string $name) {
		$this->name = $name;
		$this->price = $price;
	}
	public function getPrice() {
		return $this->price;
	}
	public function getName() {
		return $this->name;
	}
}
$obj = new Item1(123, "商品名");
var_dump($obj->getPrice(), $obj->getName());

/*
RPGの１キャラを作成します。
以下のクラスを作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

インスタンスを作成して、var_dumpで表示しなさい。

クラス名: PC1
プロパティ: 
	maxHp int型 MaxHP
	hp int型 HP

定数: なし
メソッド: 
	コンストラクタ
	引数
		int型
	処理
		プロパティ hpとmaxHpに、引数の値を代入する

	メソッド名: getHp
	引数: なし
	戻り値: プロパティ hpの値

	メソッド名: isDead
	引数: なし
	戻り値: プロパティ hpが0ならtrue、それ以外ならfalse
 */
class PC1 {
	private int $maxHp;
	private int $hp;

	public function __construct(int $i) {
		$this->maxHp = $i;
		$this->hp = $i;
	}
	public function getHp() {
		return $this->hp;
	}
	public function isDead() {
		if (0 === $this->hp) {
			return true;
		} else {
			return false;
		}
	}
}
$obj = new PC1(123);
var_dump($obj);

/*
以下のクラスを作成しなさい。
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい。

子クラス Fooのインスタンスを作成して、メソッドt1()を呼び出しなさい。

クラス名: Hoge
プロパティ: なし
定数: なし
メソッド: 
	t1
	引数
	処理: なし
		__METHOD__ を echo する

クラス名: Foo
	継承元クラス: Hoge
定数: なし
メソッド: なし 
 */
class Hoge {
	public function t1() {
		echo __METHOD__ ;
	}
}
class Foo extends Hoge {
	public function t1() {
		parent::t1();
	}
}

$obj = new Foo();
$obj->t1();





