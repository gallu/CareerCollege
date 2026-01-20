<?php  // Q14.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Book // 書籍
プロパティ:
	float型 discount // 意味合いは 割引率
また、コンストラクタを作成しなさい。
コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
getDiscount()
*/
class Book {
	private float $discount; // 割引率

	public function __construct(float $d) {
		$this->discount = $d;
	}

	public function getDiscount(): float {
		return $this->discount;
	}
}

/*
Book クラスを継承した HogeBook クラスを作成しなさい。
・プロパティに 「string型　title 」を追加
・コンストラクタの引き数は「title, discount」とする
	親のコンストラクタをcall(してdiscountを設定)
	titleをプロパティに代入
・getTitle()メソッドを追加
*/
class HogeBook extends Book{
	private string $title;

	public function __construct(string $title, float $discount) {
		parent::__construct($discount);
		$this->title = $title;
	}

	public function getTitle(): string {
		return $this->title;
	}
}
