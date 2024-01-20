<?php  // lq9.php
/*
問
クラスを作成します
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい

クラス名 Hoge
プロパティ
    num int型
コンストラクタ
    引数で値を受け取り、numのプロパティに代入する
メソッド
    メソッド名 getNum
    引数 なし
    処理 なし
    戻り値 プロパティ num の値

クラス名 Foo
    継承元 Hoge
プロパティ
    なし
コンストラクタ
    なし
メソッド
    メソッド名 getDouble
    引数 なし
    処理 なし
    戻り値 親クラスのプロパティ num の２倍の値

Fooのインスタンスを作成し、getDouble()の値をvar_dump()で出力する
 */
class Hoge {
    private int $num;
    public function __construct(int $i) {
        $this->num = $i;
    }
    public function getNum(): int {
        return $this->num;
    }
}
$obj = new Hoge(123);
var_dump($obj);
var_dump($obj->getNum());

class Foo extends Hoge {
    public function getDouble():int {
        return $this->getNum() * 2;
    }
}
$obj = new Foo(456);
var_dump($obj->getDouble());


