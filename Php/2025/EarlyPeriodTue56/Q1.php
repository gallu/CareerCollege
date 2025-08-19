<?php  // Q1.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする
クラス名: Character // キャラクター
    プロパティ:
    int型 defense // 意味合いは 防御力
    string型 description // 意味合いは 商品説明
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
    setDefense() / getDefense()
    setDescription() / getDescription()
 */
class Character {
    private int $defense;
    private string $description;

    public function setDefense(int $i): void {
        $this->defense = $i;
    }
    public function getDefense(): int {
        return $this->defense;
    }

    public function setDescription(string $v): void {
        $this->description = $v;
    }
    public function getDescription(): string {
        return $this->description;
    }
}

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Book // 書籍
プロパティ:
    string型 name // 意味合いは 商品名
    string型 format // 意味合いは EPUB, PDF など
また、メソッドとしてセッターとゲッターを作成しなさい。メソッド名は以下を想定します。
    setName() / getName()
    setFormat() / getFormat()
 */
class Book {
    private string $name;
    private string $format;

    public function setName(string $v): void {
        $this->name = $v;
    }
    public function getName(): string {
        return $this->name;
    }
}

