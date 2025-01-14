<?php  // magic5.php

class Hoge {
	public function __invoke(): mixed {
		echo __METHOD__ , "<br> \n";
		return 'abc';
	}
}

$obj = new Hoge();
$r = $obj();
var_dump($r);
