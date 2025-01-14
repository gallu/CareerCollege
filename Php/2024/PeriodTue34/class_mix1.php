<?php  // class_mix1.php
declare(strict_types=1);

class Hoge {
}
class Foo extends Hoge {
}

class Bar {
}

function t(Hoge $o) {
	var_dump($o);
}

//
$hobj = new Hoge();
t($hobj);

$bobj = new Bar();
// t($bobj); // Fatal error: Uncaught TypeError: t(): Argument #1 ($o) must be of type Hoge, Bar given

$fobj = new Foo();
t($fobj);

