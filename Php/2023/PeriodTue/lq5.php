<?php  // lq5.php
/*
問
クラスを作成します
特に指定がなければ、プロパティはprivate、メソッドはpublicにしなさい

クラス名 Hoge
プロパティ
    num int型
    str string型
コンストラクタ
    引数で２つの値を受け取り、それぞれnumとstrのプロパティに代入する
メソッド
    メソッド名 getNum
    引数 なし
    処理 なし
    戻り値 プロパティ num の値

    メソッド名 getStr
    引数 なし
    処理 なし
    戻り値 プロパティ str の値

上述のクラスを作成し、getNum()とgetStr()のメソッドをcallして結果をechoまたはvar_dump()で出力しなさい。
 */
class Hoge {
    private int $num;
    private string $str;

    public function __construct(int $num, string $str) {
        $this->num = $num;
        $this->str = $str;
    }

    public function getNum() {
        return $this->num;
    }
    public function getStr() {
        return $this->str;
    }
}

//
$obj = new Hoge(123, "hogera");
var_dump($obj->getNum());
var_dump($obj->getStr());
