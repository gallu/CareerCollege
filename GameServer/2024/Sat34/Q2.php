<?php  // Q2.php

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名:PL
プロパティ 
    name string型

コンストラクタ
    引数１つ：string型
    処理
        引数で得たデータをプロパティ name に代入する

メソッド
    メソッド名: getName()
        引数: なし
        戻り値: string型
        処理
            プロパティ name の値を返す

上述で作ったクラスのインスタンスを作成、getName()メソッドで名前を取得して出力しなさい。 
 */
class PL {
    private string $name;

    // コンストラクタ
    public function __construct(string $v) {
        $this->name = $v;
    }

    public function getName(): string {
        return $this->name;
    }
}

$obj = new PL("お名前");
echo $obj->getName() ;






