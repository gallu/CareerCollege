<?php  // class3.php
declare(strict_types=1);

class Hoge {
    public function test(): void {
        echo __METHOD__ , "<br>\n";;
    }
    public function h_test(): void {
        echo __METHOD__ , "<br>\n";;
    }
}

class Foo extends Hoge {
    public function test(): void {
        parent::test();
        echo __METHOD__ , "<br>\n";;
    }
    public function f_test(): void {
        echo __METHOD__ , "<br>\n";;
    }
}

$obj = new Foo();
$obj->f_test();
$obj->h_test();
$obj->test();

