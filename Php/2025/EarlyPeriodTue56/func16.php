<?php  // func16.php
declare(strict_types=1);

interface Hogable {
}
trait HogeTrait {
}

class Hoge implements Hogable {
    use HogeTrait;
}
class Foo extends Hoge {
}

class Bar {
}

$obj = new Foo();
// var_dump($obj);

$bObj = new Bar();
// var_dump($bObj);

// Uncaught TypeError: f(): Argument #4 ($o4) must be of type HogeTrait, Foo given
function f(Foo $o, Hoge $o2, Hogable $o3/*, HogeTrait $o4*/): void {
    echo __FUNCTION__ , "<br>";
}
//
f($obj, $obj, $obj);
// f($bObj); // Uncaught TypeError: f(): Argument #1 ($o) must be of type Foo, Bar given

