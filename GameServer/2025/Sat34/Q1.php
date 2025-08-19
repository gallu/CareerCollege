<?php  // Q1.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする
クラス名: Item // 商品
    プロパティ:
        string型 title // 意味合いは タイトル
    また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
        setTitle() / getTitle()
 */
class Item {
    private string $title;

    public function setTitle(string $v): void {
        $this->title = $v;
    }
    public function getTitle(): string {
        return $this->title;
    }
}
$obj = new Item();
$obj->setTitle("aaa");
var_dump($obj->getTitle());
echo "<br>";

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Character // キャラクター
プロパティ:
    string型 description // 意味合いは 商品説明
    また、コンストラクタを作成しなさい。
コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。
    また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getDescription()
 */
class Character {
    private string $description;

    public function __construct(string $v) {
        $this->description = $v;
    }
    
    public function getDescription(): string {
        return $this->description;
    }
}
//
$obj = new Character("abc");
var_dump($obj->getDescription());
