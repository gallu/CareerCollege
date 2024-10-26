<?php  // class2.php
declare(strict_types=1);

class Hoge {
	// メソッド(関数)を宣言できる
	public function test() {
		echo __METHOD__, "<br> \n";
	}
}

$obj = new Hoge();
$obj->test();
