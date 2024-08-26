<?php  // Q3.php
/*
クラスを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

クラス名: Item1
プロパティ
    name string型
    price int型

コンストラクタ
    引数２つ
    処理
        引数２つをプロパティに代入する

上述クラスのインスタンスを作成し、var_dump()で出力しなさい。
 */
class Item1 {
    // private 型 プロパティ名;
    private string $name;
    private int $price;

    public function __construct(string $n, int $p) {
        $this->name = $n;
        $this->price = $p;
    }
}
//
$obj = new Item1("電波サージ", 1200);
var_dump($obj);

/*
クラスを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

クラス名: ItemBase
プロパティ
    string型 name
コンストラクタ
    引数１つ
    処理 
        引数をプロパティに代入する

クラス名 FoodItem
    継承: ItemBase

FoodItemクラスのインスタンスを作成し、var_dump()で出力しなさい。
 */
class ItemBase {
    // private 型 プロパティ名;
    private string $name;

    public function __construct(string $v) {
        $this->name = $v;
    }
}

class FoodItem extends ItemBase {
}

$obj = new FoodItem("もも");
var_dump($obj);
echo "<br>";

/*
 0から99までの整数を順番に出力するプログラムを、for文を使って書きなさい
 */
for ($i = 0; $i <= 99; ++$i) {
    echo $i , ",";
}
echo "<br>\n";

/*
 "1st", "2nd", "3rd" の３つの要素を持つ配列を作成しなさい。
 作成した配列を、print_rかvar_dumpで出力しなさい
 */
// $arr = array("1st", "2nd", "3rd");
$arr = ["1st", "2nd", "3rd"];
print_r($arr);
var_dump($arr);
