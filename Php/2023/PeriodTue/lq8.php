<?php  // lq8.php
/*
問
クラスを作成します
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい

クラス名 Hoge
プロパティ
    times int型
コンストラクタ
    引数で値を受け取り、timesのプロパティに代入する
メソッド
    メソッド名 dice
    引数 なし
    処理 random_int(1, 6) で、１～６の間の乱数を times 回、作成する（ times個のサイコロを振って合計数を出すイメージ )
    戻り値 作成した乱数を返す

インスタンスを作成し、dice()メソッドで乱数を発生させて結果をvar_dump()する
 */
class Hoge {
    private int $times;
    public function __construct(int $i) {
        $this->times = $i;
    }

    public function dice(): int {
        $r = 0;
        for($i = 0; $i < $this->times; ++$i) {
            $r += random_int(1, 6);
        }
        return $r;
    }
}

$obj = new Hoge(2);
var_dump($obj->dice());
var_dump($obj->dice());
var_dump($obj->dice());

