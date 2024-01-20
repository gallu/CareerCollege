<?php  declare(strict_types=1);  // lq9.php
/*
問
以下のクラスを作成しなさい。
なお、明示的に指定がない限り、メソッドはpublic、プロパティはprivateとします。

・クラス名　Hoge
・プロパティ
    num int型
・コンストラクタ
    引数にnum、プロパティに代入
・メソッド
    アクセス権　protected
    メソッド名　getDouble
    引数　なし
    処理　プロパティのnumを二倍にする
    戻り値　「プロパティのnumを二倍にした」値を返す

    メソッド名 getNum
    引数　なし
    処理　なし
    戻り値　プロパティ num の値

以下のインタフェースを作成しなさい
・インタフェース名 HogeInterface
・内容　クラス　Hoge　の、インタフェースで作成できるメソッド全部

また、クラス　Hogeを「HogeInterfaceを継承する」ように書き換えなさい。

上述ができたら、Hogeを実際に使うコードを作成しなさい。
 */
interface HogeInterface {
    public function getNum(): int;
}

class Hoge implements HogeInterface {
    public function __construct(
        private int $num,
    ) {}

    protected function getDouble(): int {
        return $this->getNum() * 2;
    }
    public function getNum(): int {
        return $this->num;
    }
}

$obj = new Hoge(123);
var_dump( $obj->getNum() );
