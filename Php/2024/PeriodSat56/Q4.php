<?php  // Q4.php
/*
クラスとインタフェースを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

インタフェース名: HogeInterface
メソッド
    メソッド名: func
    引数: int型２つ
    戻り値: int|float

クラス名: Hoge
    継承: HogeInterface
メソッド
    メソッド名: func
    引数: int型２つ
    戻り値: int|float
    処理
        ２つの引数の割り算をした結果をreturnする

クラスのインスタンスを作成し、func()を呼び出して結果を出力しなさい
 */
interface HogeInterface {
    public function func(int $i, int $j): int|float;
}

class Hoge implements HogeInterface {
    public function func(int $i, int $j): int|float {
        return $i / $j;
    }
}

$obj = new Hoge();
$r = $obj->func(123, 456);
echo $r, "<br> \n";
echo $obj->func(123, 456) , "<br> \n";

/*
クラスとトレイトを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

トレイト名: HogeTrait
メソッド
    メソッド名: func()
    引数: なし
    処理
        "HogeTrait" と出力する(echoでもvar_dump()でもどちらでもOK)

クラス名: Hoge2
    使うトレイト: HogeTrait

Hoge2クラスのインスタンスを作成、func()メソッドを呼び出しなさい。
 */
Trait HogeTrait {
    public function func() {
        echo "HogeTrait<br> \n";
    }
}

class Hoge2 {
    use HogeTrait;
}

$obj = new Hoge2();
$obj->func();

/*
クラスを定義しなさい。
プロパティは指定がなければprivateで記述しなさい。
メソッドと定数は指定がなければpublicで記述しなさい。

クラス名: HogeStatic
静的プロパティ
    int型 count
静的メソッド
    メソッド名: addCount
    引数: なし
    戻り値: なし
    処理
        静的プロパティ count の値をインクリメントする

    メソッド名: getCount
    引数: なし
    戻り値: 静的プロパティ count の値
    処理
        なし

HogeStaticクラスのaddCount()メソッドを３回呼んだあと、getCount()メソッドでカウンタを取得、出力しなさい。
 */
class HogeStatic {
    private static int $count = 0;

    public static function addCount() {
        static::$count ++;
    }
    public static function getCount(): int {
        return static::$count;
    }
}

HogeStatic::addCount();
HogeStatic::addCount();
HogeStatic::addCount();
$r = HogeStatic::getCount();
echo $r , "<br>\n";