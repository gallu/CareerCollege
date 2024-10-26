<?php  // class3.php
declare(strict_types=1);

class Hoge {
	// プロパティ(変数)を宣言できる
	public int $num;
}

$obj = new Hoge();
var_dump($obj);
$obj->num = 123;
var_dump($obj);
var_dump($obj->num);

