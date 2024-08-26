<?php  // Q8.php
/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: BaseItem
プロパティ
    string型 name
    int型    price
コンストラクタ
    引数を2つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class BaseItem {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}
$obj = new BaseItem("abc", 123);
var_dump($obj);

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: Portion
    継承: BaseItem
プロパティ
    string型 effect
コンストラクタ
    引数を3つ
    処理
        引数の2つは、親クラスのコンストラクタに渡す
        引数の1つは、データをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class Portion extends BaseItem {
    private string $effect;

    public function __construct(string $name, int $price, string $effect) {
        parent::__construct($name, $price);
        $this->effect = $effect;
    }
}
$obj = new Portion("abc", 123, "ijk");
var_dump($obj);

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名: AttackItem
    継承: BaseItem
プロパティ
    string型 damage
コンストラクタ
    引数を3つ
    処理
        引数のデータをプロパティに代入

上述クラスのインスタンスを作成し、インスタンスをvar_dump()で出力しなさい。
 */
class AttackItem extends BaseItem {
    private string $damage;

    public function __construct(string $name, int $price, string $damage) {
        parent::__construct($name, $price);
        $this->damage = $damage;
    }
}
$obj = new AttackItem("abc", 123, "ijk");
var_dump($obj);










