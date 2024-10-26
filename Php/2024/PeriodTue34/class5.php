<?php  // class5.php
declare(strict_types=1);

class Hoge {
	// 定数を宣言できる
	public const NUM = 987;

	// プロパティ(変数)を宣言できる
	public int $num;

	// メソッド(関数)を宣言できる
	public function test() {
		echo __METHOD__, "<br> \n";
	}
}
//
$obj = new Hoge();
$obj->test();
//
$obj->num = 123;
var_dump($obj);
var_dump($obj->num);
//
$r = Hoge::NUM;
var_dump($r);
