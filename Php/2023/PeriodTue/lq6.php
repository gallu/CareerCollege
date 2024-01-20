<?php  // lq6.php
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
    メソッド名 isOdd
    引数 なし
    処理 なし
    戻り値 プロパティnumの値が奇数ならtrue、偶数ならfalseを返す

    メソッド名 isEven
    引数 なし
    処理 なし
    戻り値 プロパティnumの値が偶数ならtrue、奇数ならfalseを返す

上述のクラスを作成し、 isOdd() と isEven() の結果をvar_dump()で出力して動作を確認しなさい。
 */
class Hoge {
    private int $num;
    public function __construct($num) {
        $this->num = $num;
    }

    public function isOdd():bool {
        return ($this->num % 2) !== 0;
    }
    public function isEven():bool {
        return !$this->isOdd();
    }
}

$obj = new Hoge(123);
// var_dump($obj);
var_dump($obj->isOdd());
var_dump($obj->isEven());
