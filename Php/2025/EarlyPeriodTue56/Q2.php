<?php  // Q2.php
declare(strict_types=1);
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Item // 商品
    プロパティ:
    string型 author // 意味合いは 著者
    float型 weight // 意味合いは 重量

また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
    setAuthor() / getAuthor()
    setWeight() / getWeight()
*/
class Item {
    // プロパティ
    private string $author;
    private float $weight;

    // メソッド
    public function setAuthor(string $v): void {
        $this->author = $v;
    }
    public function getAuthor(): string {
        return $this->author;
    }
    //
    public function setWeight(float $v): void {
        $this->weight = $v;
    }
    public function getWeight(): float {
        return $this->weight;
    }
}

/*
クラス名: Book // 書籍
    プロパティ:
    string型 name // 意味合いは 商品名
また、コンストラクタを作成しなさい。
コンストラクタは、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getName()
*/
class Book {
    // プロパティ
    private string $name;

    //
    public function __construct(string $v) {
        $this->name = $v;
    }

    public function getName(): string {
        return $this->name;
    }
}
