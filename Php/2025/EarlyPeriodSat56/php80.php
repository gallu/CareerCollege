<?php  // php80.php
declare(strict_types=1);

// 名前付き引数
function hoge(int $num, float $flo, string $str): void {
    var_dump($num, $flo, $str);
}
hoge(123, 3.14, 'sss');
echo '<br>';
hoge(num:123, flo:3.14, str:'sss');
echo '<br>';
hoge(flo:3.14, num:123, str:'sss');
echo '<br>';
echo '<br>';

// コンストラクタのプロパティ昇格機能
class Hoge {
    private int $num;
    private string $str;
    public function __construct(int $num, string $str) {
        $this->num = $num;
        $this->str = $str;
    }
}
$obj = new Hoge(123, 'sss');
var_dump($obj);
echo '<br>';

//
class Hoge2 {
    public function __construct(
        private int $num,
        private string $str,
    ) {
    }
}
$obj = new Hoge2(456, 'ddd');
var_dump($obj);
echo '<br>';
echo '<br>';

// union 型
function uni(int|float $i): int|float {
    return $i * 2;
}
//
var_dump(uni(123));
echo '<br>';
var_dump(uni(3.14));
echo '<br>';

// match 式
$val = 1;
$r = match($val) {
    1 => "match num 1",
    2 => "match num 2",
    default => "num any",
};
var_dump($r);
echo "<br>";

// nullsafe 演算子
class Foo {
    public function f1(): self|null {
        echo __METHOD__ , "<br>";
        return $this;
    }
    public function f2(): self|null {
        echo __METHOD__ , "<br>";
        // return $this;
        return null;
    }
    public function f3(): self|null {
        echo __METHOD__ , "<br>";
        return $this;
    }
}
//
// (new Foo())->f1()->f2()->f3();
(new Foo())?->f1()?->f2()?->f3();

