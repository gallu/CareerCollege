<?php  // Q3.php
/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Book // 書籍
    プロパティ:
    int型 defense // 意味合いは 防御力
また、コンストラクタを作成しなさい。
コンストラクタは、引数を1つとし、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getDefense()
*/
class Book {
    private int $defense;

    public function __construct(int $v) {
        $this->defense = $i;
    }
    public function getDefense(): int {
        return $this->defense;
    }
}

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Character // キャラクター
    プロパティ:
    string型 genre // 意味合いは ジャンル

また、コンストラクタを作成しなさい。
コンストラクタは、引数を２つとし、引数をそれぞれプロパティに代入しなさい。

また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getGenre()
*/
class Character {
    private string $genre;

    public function __construct(string $v) {
        $this->genre = $v;
    }

    public function getGenre(): string {
        return $this->genre;
    }
}
