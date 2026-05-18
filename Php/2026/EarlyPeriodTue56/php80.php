<?php  // php80.php

// 名前付き引数 のサポートが追加されました。
function hogeName(int $num, string $name, bool $flg): void {
    var_dump($num, $name, $flg);
}
//
hogeName(123, "hello", true);
echo "<br>";
// 名前付き引数
hogeName(num: 456, name: "world", flg: false);
echo "<br>";
// 名前付き引数(順番を変えてもOK)
hogeName(name: "test", flg: true, num: 789);
echo "<br>";


// コンストラクタのプロパティ昇格機能
// 従来
class Hoge1 {
    private int $num;
    private string $name;
    public function __construct(int $num, string $name) {
        $this->num = $num;
        $this->name = $name;
    }
}
$obj = new Hoge1(123, "name");
var_dump($obj);
echo "<br>";
// 昇格
class Hoge2 {
    public function __construct(
        private int $num,
        private string $name,
    ) {
    }
}
$obj = new Hoge2(456, "value");
var_dump($obj);
echo "<br>";


// union 型 のサポートが追加されました。
function funcUni(int|float $num): int|float {
    $r = $num * 123;
    return $r;
}
//
$r = funcUni(123);
var_dump($r);
echo "<br>";
$r = funcUni(3.14);
var_dump($r);
echo "<br>";

// match 式 のサポートが追加されました。
$s = "2";

switch ($s) {
    case 2:
        echo "switch int 2 <br>\n";
        break;
    case "2":
        echo "switch string 2 <br>\n";
        break;
}

$v = match($s) {
    2 => "switch int 2 <br>\n",
    "2" => "switch string 2 <br>\n",
};
echo $v;

// nullsafe 演算子 (?->) のサポートが追加されました。
$obj = null;
$r = $obj?->test();
var_dump($r);
/*
$obj = (new XXXX())
    ?->func1()
    ?->func2()
    ?->func3()
    ?->func4();
*/

// 任意の数の関数のパラメータが、可変長引数に置き換えられるようになりました。 但し、型に互換性がある場合に限ります
function funcHogeParam(...$params) {
    var_dump($params);
    echo "<br>\n";
}
funcHogeParam(1, 2, 3);
funcHogeParam("1st");

// オブジェクトのクラス名を $object::class と書くことで取得できるようになりました
$obj = new Hoge2(123, "name");
var_dump(Hoge2::class); // もともとできた
var_dump($obj::class); // 新しくできるようになった
