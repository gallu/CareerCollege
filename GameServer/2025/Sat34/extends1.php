<?php  // extends1.php
/*
is-a関係にあるなら、継承が適している

A is B.
人間 は 哺乳類 である
哺乳類 は 生物 である
武器 は 装備品 である
防具 は 装備品 である
 */
class Hoge {
    public function func1() {
        echo __METHOD__ , "<br>";
    }
}

class Foo extends Hoge {
    public function func2() {
        echo __METHOD__ , "<br>";
    }
}

$fobj = new Foo();
$fobj->func2();
$fobj->func1();
