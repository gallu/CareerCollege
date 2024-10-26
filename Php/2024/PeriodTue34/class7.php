<?php  // class7.php
declare(strict_types=1);

class Hoge {
	// プロパティ(変数)を宣言できる
	private int $num;

	// メソッド(関数)を宣言できる
	public function setNum(int $i): void {
		$this->num = $i;
	}
	public function test() {
		echo $this->num , "<br> \n";
	}
}
//
$obj = new Hoge();
// $obj->num = 123; // Fatal error: Uncaught Error: Cannot access private propertys
$obj->setNum(123);
$obj->test();
