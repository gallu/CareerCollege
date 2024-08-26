<?php  // Q1.php
declare(strict_types=1);

/*
クラス Items を定義しなさい。中身は空でOKです。
クラス Items のインスタンスを作成して、var_dump() で表示しなさい。
 */
class Items {
}
$obj = new Items();
var_dump($obj);

/*
クラス Items1 を定義しなさい。
・コンストラクタ
  -> echoで「コンストラクタ」と表示する

クラス Items1 のインスタンスを作成し、コンストラクタを起動させる。
 */
class Items1 {
    public function __construct() {
        echo "コンストラクタ <br>";
    }
}
$obj = new Items1();

/*
クラス Items2 を定義しなさい。
・コンストラクタ: 引数で string を１つ受け取る
  -> 受け取った引数の内容をvar_dump() する

クラス Items2 のインスタンスを作成し、コンストラクタを起動させる。
 */
class Items2 {
    public function __construct(string $v) {
        var_dump($v);
    }
}
$obj = new Items2("hoge");

/*
クラス Items3 を定義しなさい。
・プロパティ: 指定がなければprivateで
  -> string型、 str
・コンストラクタ: 引数で string を１つ受け取る
  -> プロパティ str に、引数の内容を代入する

クラス Items3 のインスタンスを作成し、コンストラクタを起動させる。
インスタンスをvar_dump()で出力しなさい。
 */
class Items3 {
    private string $str;
    public function __construct(string $v) {
        $this->str = $v;
    }
}
$obj = new Items3("abc");
var_dump($obj);

/*
クラス Items4 を定義しなさい。
・プロパティ: 指定がなければprivateで
  -> int $num
・コンストラクタ
  -> 引数でintを一つ受け取り、プロパティ num に代入する
・メソッド
  -> プロパティ num のゲッター

クラス Items4 のインスタンスを作成して、var_dump() で表示、numのゲッターでnumの値を表示しなさい。
 */
class Items4 {
    private int $num;

    public function __construct(int $i) {
        $this->num = $i;
    }

    public function getNum(): int {
        return $this->num;
    }
}
//
$obj = new Items4(789);
var_dump($obj);
var_dump($obj->getNum());

/*
クラス Person を作成しなさい。
プロパティ
  int型 age
・コンストラクタ
  -> 引数でintを一つ受け取り、プロパティ age に代入する
・メソッド
  isDdult
  戻り値: bool
  処理
    -> プロパティ age が20以上ならtrue、19以下ならfalse

インスタンスを引数18で作成、isDdult()の結果をvar_dump()しなさい。
インスタンスを引数20で作成、isDdult()の結果をvar_dump()しなさい。
 */
class Person {
    private int $age;

    public function __construct(int $i) {
        $this->age = $i;
    }

    public function isDdult(): bool {
        if ($this->age >= 20) {
            return true;
        }
        // else
        return false;
    }
}
//
$obj = new Person(18);
var_dump( $obj->isDdult() );

$obj2 = new Person(20);
var_dump( $obj2->isDdult() );



