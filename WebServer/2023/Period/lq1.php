<?php  declare(strict_types=1);  // lq1.php
/*
問
以下のクラスを作成しなさい。
なお、明示的に指定がない限り、メソッドはpublic、プロパティはprivateとします。

・クラス名: Hoge
・プロパティ
    num int型
    str　string型
・コンストラクタ
    引数にnumとstrを与え、プロパティに代入する
・メソッド
    getNum()
    引数なし
    処理なし
    戻り値　プロパティ　num　の値

    getStr()
    引数なし
    処理なし
    戻り値　プロパティ　str　の値
 */
class Hoge {
    private int $num;
    private string $str;

    public function __construct(int $num, string $str) {
        $this->num = $num;
        $this->str = $str;
    }
    
    public function getNum(): int {
        return $this->num;
    }
    public function getStr(): string {
        return $this->str;
    }
}

//
$obj = new Hoge(123, "hogera");
var_dump($obj->getNum());
var_dump($obj->getStr());
