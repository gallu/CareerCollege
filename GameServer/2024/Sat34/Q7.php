<?php  // Q7.php
/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: Portion
プロパティ
    string型 name
    int型    price
    string型 effect
コンストラクタ
    引数を3つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class Portion {
    private string $name;
    private int $price;
    private string $effect;

    public function __construct(string $name, int $price, string $effect) {
        $this->name = $name;
        $this->price = $price;
        $this->effect = $effect;
    }
}
$obj = new Portion("abc", 123, "ijk");
var_dump($obj);

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: AttackItem
プロパティ
    string型 name
    int型    price
    string型 damage
コンストラクタ
    引数を3つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class AttackItem {
    private string $name;
    private int $price;
    private string $damage;

    public function __construct(string $name, int $price, string $damage) {
        $this->name = $name;
        $this->price = $price;
        $this->damage = $damage;
    }
}
$obj = new AttackItem("abc", 123, "ijk");
var_dump($obj);




