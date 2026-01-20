<?php  // Q15.php

/*
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする
クラス名: Item // 商品
プロパティ:
string型 description // 意味合いは 商品説明
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
setDescription() / getDescription()
*/
class Item {
	private string $description; // 商品説明

	public function setDescription(string $description) {
		$this->description = $description;
	}
	public function getDescription(): string {
		return $this->description;
	}
}

/*
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Book // 書籍
プロパティ:
string型 publisher // 意味合いは 出版社
また、コンストラクタを作成しなさい。
コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
getPublisher()
*/
class Book {
	private string $publisher; // 出版社

	public function __construct(string $publisher) {
		$this->publisher = $publisher;
	}
	public function getPublisher(): string {
		return $this->publisher;
	}
}

/*
上述 Bookを継承したクラスを作成しなさい。

クラス名: ItBook
継承元クラス: Book
プロパティ
int型 price // 意味合いは 値段
また、コンストラクタを作成しなさい。
コンストラクタは、引数を2つとし、1つは引数をプロパティに代入、もう1つは「親クラスのコンストラクタ」をcallしてpublisherに代入しなさい
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
getPrice()
*/
class ItBook extends Book {
	private int $price;

	public function __construct(int $price, string $publisher) {
		parent::__construct($publisher);
		$this->price = $price;
	}
	public function getPrice(): int {
		return $this->price;
	}
}

/*
上述 ItBookクラスにある
getPublisher()
getPrice()
の２つのメソッド用のインタフェースを作成しなさい。

インタフェース名は ItBookInterface とする。
*/
interface ItBookInterface {
	public function getPublisher(): string;
	public function getPrice(): int;
}

/*
以下のトレイトを作成しなさい

トレイト名: LogTrait
メソッド
	メソッド名: logPrint
	引き数: string型 message
	処理内容
		引き数の内容をechoで出力する
	戻り値: なし

以下のクラスを作成しなさい。
クラス名: Character
使うトレイト名: LogTrait
*/
trait LogTrait {
	public function logPrint(string $message): void {
		echo $message;
	}
}
class Character {
	use LogTrait;
}

$obj = new Character();
$obj->logPrint("hoge");
