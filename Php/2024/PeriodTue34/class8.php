<?php // class8.php
declare(strict_types=1);

class Hoge {
	// コンストラクタ
	public function __construct() {
		echo __METHOD__ , "<br> \n";
	}

	// デストラクタ
	public function __destruct() {
		echo __METHOD__ , "<br> \n";
	}
}

$obj = new Hoge();
var_dump($obj);
