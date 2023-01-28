<?php // class_4th.php
//
class Hoge {
    public function test() {
        echo "Hoge test\n";
    }
	public function test2() {
        echo "Hoge test2\n";
	}
}
class Foo extends Hoge {
	public function test2() {
        echo "Foo test2\n";
	}
}
class Bar extends Hoge {
	public function test2() {
        echo "Bar test2\n";
	}
}

//
$hoge_obj = new Hoge();
echo "Hoge\n";
$hoge_obj->test();
$hoge_obj->test2();
//
$foo_obj = new Foo();
echo "Foo\n";
$foo_obj->test();
$foo_obj->test2();
//
$bar_obj = new Bar();
echo "Bar\n";
$bar_obj->test();
$bar_obj->test2();













