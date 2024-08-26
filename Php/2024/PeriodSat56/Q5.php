<?php // Q5.php

// クラス Item1 を定義しなさい。中はからでOKです。
// クラス Item1 のインスタンスを作成して、var_dump()で出力しなさい
class Item1 {
}
$obj = new Item1();
var_dump($obj);

echo "<br>";
// クラス Item2 を定義しなさい。以下のプロパティを定義しなさい
// int型 price 
// クラス Item2 のインスタンスを作成して、プロパティ price に1200を代入、var_dump()で出力しなさい
class Item2 {
    public int $price;
}
$obj = new Item2();
$obj->price = 1200;
var_dump($obj);

echo "<br>";
// クラス Item3 を定義しなさい。以下のメソッドを定義しなさい
// メソッド名: test
// 引数: なし
// 戻り値: なし
// 処理: echoで "test out" と出力する
// クラス Item3 のインスタンスを作成して、メソッド testを呼び出しなさい
class Item3 {
    public function test() {
        echo "test out";
    }
}
$obj = new Item3();
$obj->test();


echo "<br>";
// クラス Item4 を定義しなさい。以下の定数を定義しなさい。
// 定数名: POINT_RATE   , 値 5  // ポイントは、購買額の5%
// クラス Item4の定数 POINT_RATE をechoで出力しなさい。
class Item4 {
    public const POINT_RATE = 5;
}
echo Item4::POINT_RATE;

echo "<br>";
// クラス Item5 を定義しなさい。以下のプロパティをprivateで定義しなさい
// int型 price 
// プロパティのアクセサを作成しなさい
// クラス Item5 のインスタンスを作成して、セッターからpriceに1500を設定、ゲッターでpriceの値を取得してechoで出力しなさい
class Item5 {
    private int $price;

    public function setPrice(int $p) {
        $this->price = $p;
    }
    public function getPrice(): int {
        return $this->price;
    }
}
$obj = new Item5();
$obj->setPrice(1500);
echo $obj->getPrice();

echo "<br>";
// クラス Item6 を定義しなさい。以下のプロパティをprivateで定義しなさい
// int型 price 
// コンストラクタで引数を受け取り、priceの値を設定しなさい
// プロパティのゲッターを作成しなさい
// クラス Item6 のインスタンスを作成して、ゲッターでpriceの値を取得してechoで出力しなさい
class Item6 {
    private int $price;

    public function __construct(int $p) {
        $this->price = $p;
    }

    public function getPrice(): int {
        return $this->price;
    }
}
$obj = new Item6(1234);
echo $obj->getPrice();

echo "<br>";
// クラス Item7 を定義しなさい。以下のプロパティをprivateで定義しなさい
// int型 price 
// コンストラクタで引数を受け取り、priceの値を設定しなさい
// プロパティのゲッターを作成しなさい
//
// クラス Item7Ex を定義しなさい。クラス Item7 を継承しなさい。以下のメソッドを定義しなさい
// メソッド名: getTax
// 引数: なし
// 戻り値: float
// 処理: プロパティ priceの値の10%の値をreturnする
//
// クラス Item7Ex のインスタンスを作成して、getTaxで税額を取得、echoで出力しなさい
class Item7 {
    private int $price;
    public function __construct(int $p) {
        $this->price = $p;
    }
    public function getPrice(): int {
        return $this->price;
    }
}
class Item7Ex extends Item7 {
    public function getTax(): float {
        return $this->getPrice() * 0.1;
    }
}
//
$obj = new Item7Ex(1234);
echo $obj->getTax();

echo "<br>";
// インタフェース Item8Interface を定義しなさい。以下のメソッドを定義しなさい
// メソッド名: getTax
// 引数: int
// 戻り値: float
//
// クラス Item8 を定義しなさい。Item8Interfaceを継承しなさい
// メソッド名: getTax
// 引数: int
// 戻り値: float
// 処理: 引数の10%の値をreturnする(消費税額の計算)
// クラス Item8 のインスタンスを作成して、getTaxで税額を取得、echoで出力しなさい
interface Item8Interface {
    public function getTax(int $price): float;
}
class Item8 implements Item8Interface {
    public function getTax(int $price): float {
        return $price * 0.1;
    }
}
$obj = new Item8();
echo $obj->getTax(9999);
