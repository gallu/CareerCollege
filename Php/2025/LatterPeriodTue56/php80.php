<?php  // php80.php

// コンストラクタのプロパティ昇格機能
class Hoge1 {
    private int $num;
    private string $name;
    public function __construct(int $num, string $name) {
        $this->num = $num;
        $this->name = $name;
    }
}
//
class Hoge2 {
    public function __construct(
        private int $num,
        private string $name,
    ) {}
}

// match式
$v = "2e2";
switch ($v) {
    case 1:
        echo "v is 1 <br>";
        break;
    case 200:
        echo "v is 200 <br>";
        break;
    default:
        echo "v is any <br>";
        break;
}
//
$r = match($v) {
    1 => "match v is 1 <br>",
    200 => "match v is 200 <br>",
    default => "match v is any <br>",
};
echo $r;

// nullsafe 演算子
class HogeNull {
    public function f1(): ?static {
        echo "f1 <br>";
        return $this;
    }
    public function f2(): ?static {
        echo "f2 <br>";
        return null;
    }
    public function f3(): ?static {
        echo "f3 <br>";
        return $this;
    }
}
//
$obj = (new HogeNull())
    ?->f1()
    ?->f2()
    ?->f3();
var_dump($obj);

// オブジェクトのクラス名を $object::class と書くことで取得できるようになりました
$obj = new Hoge2(123, "name");
var_dump( Hoge2::class ); // もともとあった
var_dump( $obj::class ); // こっちが追加された

// throw が式として使えるようになりました。
try {
    $awk = [];
    $v = $awk['no key'] ?? throw new Exception('no key');
} catch (Exception $e) {
    echo $e->getMessage() , "<br>";
}

/* 下位互換性のない変更点 */
// 文字列と数値の比較
var_dump('42 == "42foo"', 42 == "42foo");

// クラス名と同じ名前のメソッドは、コンストラクタと解釈されなくなりました
class HogeConst {
    public function HogeConst() {
        echo __METHOD__ , "<br>";
    }
}
$obj = new HogeConst();

