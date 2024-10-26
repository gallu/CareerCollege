<?php  // php8_0.php

// 名前付き引数 のサポートが追加されました。
function hogeName(int $num, string $str, float $f): void {
    var_dump($num, $str, $f);
}
//
hogeName(123, 'sss', 3.14);
echo "<br>\n";
hogeName(f: 1.23, num: 999, str: 'hello'); // 名前付き引数

// コンストラクタのプロパティ昇格機能
class Hoge1 {
    private int $num;
    private string $str;
    //
    public function __construct(int $num, string $str) {
        $this->num = $num;
        $this->str = $str;
    }
}
$obj = new Hoge1(123, 'sss');
var_dump($obj);
//
class Hoge2 {
    //
    public function __construct(
        private int $num,
        private string $str,
    ) {
    }
}
$obj = new Hoge2(999, 'hello');
var_dump($obj);

// union 型
function funcUnion(int|float $num): void {
    var_dump($num);
}
funcUnion(123);
funcUnion(3.14);

// match 式
$v = '2';
// $v = 4;
echo "switch ... ";
switch ($v) {
    case 1:
        echo "int 1";
        break;
    case 2:
        echo "int 2";
        break;
    case '2':
        echo "string 2";
        break;
}
echo "<br> \n";
//
$r = match($v) {
    1 => 'int 1',
    2 => 'int 2',
    '2' => 'string 2',
};
echo "{$r} <br>\n";

// nullsafe 演算子
class Foo {
    public function func_1(): static|null {
        echo __METHOD__ , "<br>\n";
        return $this;
    }
    public function func_2(): static|null {
        echo __METHOD__ , "<br>\n";
        // return $this;
        return null;
    }
    public function func_3(): static|null {
        echo __METHOD__ , "<br>\n";
        return $this;
    }
}
//
// $obj = (new Foo())
        // ->func_1()
        // ->func_2()
        // ->func_3();
// var_dump($obj);
//
$obj = (new Foo())
        ?->func_1()
        ?->func_2()
        ?->func_3();
var_dump($obj);
echo "<br> \n";

// 三項演算子をネストする場合、明示的に括弧が必要になりました。
$a = $b = $c = 1;
$num = ($a === $b)? 'yes' : 'no';
var_dump($num);
echo "<br> \n";

$num = ($a !== $b)? 'Yes' : (($b !== $c)? 'yYes': 'yNo');
// $num = ($a !== $b)? 'Yes' : ($b !== $c)? 'yYes': 'yNo'; // error
var_dump($num);
echo "<br> \n";

