<?php  // lq7.php
/*
問
クラスを作成します
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい

クラス名 Hoge
プロパティ
    なし
コンストラクタ
    なし
メソッド
    メソッド名 dice
    引数 なし
    処理 random_int(1, 6) で、１～６の間の乱数を作成する
    戻り値 作成した乱数を返す

インスタンスを作成し、dice()メソッドで乱数を発生させて結果をvar_dump()する
 */
class Hoge {
    public function dice() {
        $r = random_int(1, 6);
        return $r;
    }
}

$obj = new Hoge();
var_dump( $obj->dice() );
var_dump( $obj->dice() );
