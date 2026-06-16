<?php  // Q2.php

/*
以下のクラスを定義しなさい。
クラス名: Character // キャラクター

インスタンスを1つ作成し、var_dump()で表示しなさい。
*/
class Character {
}

$obj = new Character();
var_dump($obj);

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Item // 商品
プロパティ:
float型 discount // 意味合いは 割引率
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
setDiscount() / getDiscount()

インスタンスを1つ作成し、割引率として0.1をsetしてから、インスタンスをvar_dump()で表示しなさい。
*/
class Item {
    // float型 discount // 意味合いは 割引率
    private float $discount; // 割引率

    public function setDiscount(float $discount): void {
        $this->discount = $discount;
    }
    public function getDiscount(): float {
        return $this->discount;
    }
}
// 
$obj = new Item();
$obj->setDiscount(0.1);
var_dump($obj);

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Book // 書籍
プロパティ:
string型 author // 意味合いは 著者
また、コンストラクタを作成しなさい。
コンストラクタは、引数1つとし、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
getAuthor()

インスタンスを1つ作成し、著者として (好きな名前) をsetしてから、インスタンスをvar_dump()で表示しなさい。
*/
class Book {
    // string型 author // 意味合いは 著者
    private string $author; // 著者
    
    public function __construct(string $author) {
        $this->author = $author;
    }

    public function getAuthor(): string {
        return $this->author;
    }
}
//
$obj = new Book("ほげら");
var_dump($obj);
