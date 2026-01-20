<?php  // class9.php
declare(strict_types=1);

class Hoge {
	private int $num;
	public function __construct(int $i) {
		if ($i < 0) {
			// return null;
			throw new RuntimeException("numは0以上の整数でお願いします");
		}
		
		$this->num = $i;
	}
	// XXX ゲッター省略
}

try {
	$obj = new Hoge(0);
	var_dump($obj);
} catch(RuntimeException $e) {
	echo $e->getMessage();
}
