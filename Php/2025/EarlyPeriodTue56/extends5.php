<?php  // extends5.php
declare(strict_types=1);

class Hoge {
    public function __construct(string $name) {
        var_dump($name);
    }
}
class Foo extends Hoge {
    // コンストラクタは反変性 と 共変性を気にしなくていいよ！！
    public function __construct(int $num, float $rate) {
        parent::__construct("{$num}, {$rate}");
    }
}

$fobj = new Foo(123, 3.14);
