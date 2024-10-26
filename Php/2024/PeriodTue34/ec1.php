<?php  // ec1.php
declare(strict_types=1);

// 商品(書籍)
class Book {
	private string $title; // タイトル
	private int $price; // 価格
	private string $author; // 著者
	private string $publisher; // 出版社

	public function __construct(string $title, int $price, string $author, string $publisher) {
		$this->title = $title;
		$this->price = $price;
		$this->author = $author;
		$this->publisher = $publisher;
	}
	// XXX ゲッターは省略
}

$obj1 = new Book("CPUの創りかた", 3080, "渡波郁", "毎日コミュニケーションズ");
var_dump($obj1);

$obj2 = new Book("作ろう! CPU", 3828, "上原周", "マイナビ出版 ");
var_dump($obj2);
