<?php  // class6.php
declare(strict_types=1);

class Hoge {
	// プロパティ(変数)を宣言できる
	public int $num;

	// メソッド(関数)を宣言できる
	public function test() {
		echo $this->num , "<br> \n";
	}
}
//
$obj = new Hoge();
$obj->num = 123;
$obj->test();
