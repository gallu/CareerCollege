<?php  // Q1.php

/*
変数 $names に、以下の4個の要素を持つ配列を作成し、foreach で各要素をそのまま echo しなさい。
    数値 51946
    文字列 'small'
    文字列 'melon'
    数値 20584
*/
$names = [
    51946,
    'small',
    'melon',
    20584,
];
foreach ($names as $k => $v) {
    echo "{$v}, ";
}
echo "<br>";

/*
以下のクラスを定義しなさい。
指定されている場合は型宣言もきちんと書くこと。
明示されていない限り、メソッドはpublic、プロパティはprivateとする

クラス名: Project // プロジェクト
    プロパティ:
    string型 name // 意味合いは 商品名
また、コンストラクタを作成しなさい。
コンストラクタは、引数をプロパティに代入しなさい。
また、メソッドとしてゲッターを作成しなさい。メソッド名は以下を想定します。
    getName()
*/
class Project {
    private string $name;
    public function __construct(string $name) {
        $this->name = $name;
    }
    public function getName(): string {
        return $this->name;
    }
}
