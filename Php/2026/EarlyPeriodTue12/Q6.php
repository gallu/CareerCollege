<?php // Q6.php

/*
クラス Book を作成

プロパティ
    int型 price 
    string型 title

コンストラクタでデータを受け取り、ゲッターのあるクラスを作成。
適当な引数でインスタンスを1つ作成、var_dump()で出力
*/
class Book {
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

$obj = new Book(9980, "鳩時計を作る");
var_dump($obj);
