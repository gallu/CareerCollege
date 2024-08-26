<?php  // Q5.php
/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

クラス名 Hoge
    プロパティ なし
    コンストラクタ なし
    メソッド なし

クラス名 Foo
    プロパティ
        Hogeクラス型 obj

コンストラクタ なし
メソッド
    メソッド名 setHoge
    引数 1つ Hogeクラス型
    処理
        引数の値を、プロパティ obj に代入する

クラスFooのインスタンスを作成、setHoge()を実行した後、インスタンスをvar_dump() で出力しなさい。
 */
class Hoge {
}

class Foo {
    private Hoge $obj;

    public function setHoge(Hoge $o) {
        $this->obj = $o;
    }
}

$fobj = new Foo();
$hobj = new Hoge();
$fobj->setHoge($hobj);
var_dump($fobj);

/*
以下のクラスを作成しなさい。
明記がなければ、プロパティはprivate、メソッドと定数はpublicとします。

一部、 class14.php で作ったクラスを使用します。

クラス名 PC
    プロパティ
        Weaponクラス型 weapon
        Armorクラス型 armor

クラスFooのインスタンスを作成、インスタンスをvar_dump() で出力しなさい。
 */
require_once __DIR__ . "/class14.php" ;

class PC {
    private Weapon $weapon;
    private Armor $armor;
}

$pc = new PC();
var_dump($pc);
