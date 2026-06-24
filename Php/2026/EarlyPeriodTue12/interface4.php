<?php  // interface4.php
declare(strict_types=1);

interface HogeInterface {
    public function func(int $num): int;
}

class Hoge implements HogeInterface {
    public function func(int $num): int {
        return $num * 2;
    }
}
class Foo implements HogeInterface {
    public function func(int $num): int {
        return $num ** 2;
    }
}

function fff(HogeInterface $obj): int {
    return $obj->func(123);
}

$hobj = new Hoge();
$fobj = new Foo();

var_dump( fff($hobj) );
var_dump( fff($fobj) );
