<?php  // Q2.php
/*
クラス Items1 を定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

クラス名: Items1
プロパティ
    string型 name
    int型 price
    string型 detail
    bool型 sell_flg

上述のクラスのインスタンスを作成し、var_dump()で出力しなさい。
*/
class Items1 {
    private string $name;
    private int $price;
    private string $detail;
    private bool $sell_flg;
}
$obj = new Items1();
var_dump($obj);

/*
クラスを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

クラス名: Item2
メソッド
    メソッド名: calTax
    引数: int
    戻り値: float
    処理
        引数の値を1.1倍した値をreturnする

上述のクラスのインスタンスを作成し、calTax()を呼び出して戻り値を出力しなさい。
 */
class Item2 {
    public function calTax(int $num): float {
        return $num * 1.1;
    }
}

// 上述のクラスのインスタンスを作成し
$obj = new Item2();

// calTax()を呼び出して戻り値を出力しなさい。
$r = $obj->calTax(123);
var_dump($r);


/*
クラスを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

クラス名: Item3
メソッド
    メソッド名: getTotal
    引数: 配列(array)
    戻り値: int
    処理
        引数の配列の値のすべてを合計してreturnする

上述のクラスのインスタンスを作成しなさい。
引数に以下を渡してgetTotal()を呼び出し、戻り値を出力しなさい。

引数に渡す値
[11,22,33]
*/
class Item3 {
    public function getTotal(array $arr): int {
        $total = 0;
        foreach ($arr as $v) {
            $total += $v;
        }
        return $total;

        // return array_sum($arr);
    }
}

$obj = new Item3();
$r = $obj->getTotal( [11,22,33] );
var_dump($r);
