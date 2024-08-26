<?php  // Q4.php
/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: Weapon
プロパティ
    name string型
    price int型
    isSale bool型

コンストラクタ
    引数を3つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class Weapon {
    private string $name;
    private int $price;
    private bool $isSale;

    public function __construct(string $name, int $price, bool $isSale) {
        $this->name = $name;
        $this->price = $price;
        $this->isSale = $isSale;
    }
}

$obj = new Weapon("ひのきの棒", 60, true);
var_dump($obj);

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: Armor
プロパティ
    name string型
    price int型
    defense int型
    isSale bool型

コンストラクタ
    引数を4つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class Armor {
    private string $name;
    private int $price;
    private int $defense;
    private bool $isSale;

    public function __construct(string $name, int $price, int $defense, bool $isSale) {
        $this->name = $name;
        $this->price = $price;
        $this->defense = $defense;
        $this->isSale = $isSale;
    }
}

$obj = new Armor("かわの鎧", 120, 10, true);
var_dump($obj);

