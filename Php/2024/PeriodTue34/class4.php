<?php  // class4.php
declare(strict_types=1);

class Hoge {
	// 定数を宣言できる
	public const NUM = 987;
}

$r = Hoge::NUM;
var_dump($r);
