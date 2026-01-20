<?php  // class3.php

class Hoge {
	// 関数(メソッド)
	public function t(int $num): int {
		$r = $num * 2;
		return $r;
	}
}

$obj = new Hoge();
$r = $obj->t(123);
var_dump($r);
