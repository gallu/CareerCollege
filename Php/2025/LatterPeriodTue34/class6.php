<?php  // class6.php

class Hoge {
	// コンストラクタ
	public function __construct() {
		echo __METHOD__ , "<br>";
	}

	// デストラクタ
	public function __destruct() {
		echo __METHOD__ , "<br>";
	}
}

//
echo "before new <br>";
$obj = new Hoge();
echo "after new <br>";
