<?php  // func12.php
declare(strict_types=1);

class Hoge {
}
class Foo extends Hoge {
}

interface ITax {
}
class Tax implements ITax {
}

trait BarTrait {
}
class Bar {
    use BarTrait;
}

//
$hobj = new Hoge();
$fobj = new Foo();
$tobj = new Tax();
$bobj = new Bar();

//
function t(
    Hoge|null $hoge = null,
    Foo|null $foo = null,
    ITax|null $tax = null,
    BarTrait|null $bar = null,
) {
}

//
t(hoge: $hobj); // ok
t(foo: $fobj); // ok
//
t(tax: $tobj); // ok
//
// t(bar: $bobj); // ng : Fatal error: Uncaught TypeError: t(): Argument #4 ($bar) must be of type ?BarTrait, Bar given
//
t(hoge: $fobj); // ok
