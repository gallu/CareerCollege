<?php  // extends1.php

/*
is-a関係
A is a B
人間 は 哺乳類です
パウンドケーキ は ケーキです
ケーキ は 洋菓子です
 */

class Hoge {
	public function test() {
		echo __METHOD__ , "<br> \n";
	}
}

class Foo extends Hoge {
}

class Bar {
}

$hobj = new Hoge();
$fobj = new Foo();
$bobj = new Bar();
// var_dump($hobj, $fobj);

$hobj->test();
$fobj->test();
$bobj->test(); // Fatal error: Uncaught Error: Call to undefined method Bar::test() in 

