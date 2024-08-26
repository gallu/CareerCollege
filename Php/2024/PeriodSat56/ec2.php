<?php  // ec2.php
declare(strict_types=1);

// 商品クラス定義
class BookItem {
    // 変数(プロパティ)
    private int $price;  // 価格
    private string $title;   // タイトル
    private string $publisher;   // 出版社
    //
    public function __construct(int $price, string $title, string $publisher) {
        $this->price = $price;
        $this->title = $title;
        $this->publisher = $publisher;
    }
    // ゲッター省略
}

//
$obj = new BookItem(2090, "インターネットのカタチ", "オーム社");
var_dump($obj);

