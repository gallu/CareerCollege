<?php  // extends9.php
declare(strict_types=1);

class HogeBase {
}

class Hoge extends HogeBase {
}
class Foo extends HogeBase {
}
class Bar {
}

function func1(Hoge $obj) {
}
function func2(HogeBase $obj) {
}

$objHoge = new Hoge();
$objFoo = new Foo();
$objBar = new Bar();

//
func1($objHoge);
// func1($objFoo);
// func1($objBar);

//
func2($objHoge);
func2($objFoo);
// func2($objBar);



