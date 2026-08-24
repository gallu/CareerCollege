<?php  // Q7.php

/*
インタフェース BookInterface を作成
    引数に「int型 price」「string型 title」の2つがあるコンストラクタ
    priceのゲッター
    titleのゲッター

トレイト ItemPrintTrait を作成
    メソッド: itemmPrint
        引数: price
        処理内容
            引数の数値 + '円' を出力する

クラス Book を作成
    BookInterface を実装
    ItemPrintTrait を使う

プロパティ
    int型 price 
    string型 title

コンストラクタでデータを受け取り、ゲッターのあるクラスを作成。
適当な引数でインスタンスを1つ作成、var_dump()で出力
*/

interface BookInterface {
    public function __construct(int $price, string $title);
    public function getPrice(): int;
    public function getTitle(): string;
}

trait ItemPrintTrait {
    public function itemPrint(int $price) {
        echo "{$price}円<br>\n";
    }
}

class Book implements BookInterface {
    use ItemPrintTrait;
    
    private int $price:
    private string $title;

    public function __construct(int $price, string $title) {
        $this->price = $price;
        $this->title = $title;
    }

    public function getPrice(): int {
        return $this->price;
    }
    public function getTitle(): string {
        return $this->title;
    }
}
