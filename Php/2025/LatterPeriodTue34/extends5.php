<?php  // extends5.php
declare(strict_types=1);

class Hoge {
}
class Foo {
}

// 多重継承: PHPでは禁止
class Bar extends Hoge, Foo {
}
