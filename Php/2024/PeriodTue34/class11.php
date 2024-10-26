<?php  // class11.php
declare(strict_types=1);

class Hoge {
	private int $num;
	private string $str;

	public function __construct(int $i, string $s) {
		// 確認
		if ($i < 0) {
			throw new Exception("numが負の値なの、ヤダ");
		}
		if ($s === "") {
			throw new Exception("strが空文字なの、ヤダ");
		}
		$this->num = $i;
		$this->str = $s;
	}
	// XXX ゲッターは省略
}
try {
	$obj = new Hoge(123, "hello");
	var_dump($obj);

	$obj = new Hoge(-123, "hello");
	$obj = new Hoge(123, "");
} catch (Exception $e) {
	echo $e->getMessage();
}
