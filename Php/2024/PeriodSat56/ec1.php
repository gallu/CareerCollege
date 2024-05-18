<?php  // ec1.php
declare(strict_types=1);

// 商品クラス定義
class BookItem {
    // 変数(プロパティ)
    public int $price;  // 価格
    public string $title;   // タイトル
    public string $publisher;   // 出版社
}

$obj = new BookItem();
$obj->price = 2090;
$obj->title = "インターネットのカタチ";
$obj->publisher = "オーム社";

var_dump($obj);
