<?php  // extends.php
declare(strict_types=1);

class Hoge {
}
class Foo {
}

// 多重継承: なのでerrorになる
class Bar extends Hoge, Foo {
}

$obj = new Bar();
var_dump($obj);

