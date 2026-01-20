<?php  // json2.php

class Hoge {
	public function __construct(
		private int $num,
		private bool $flg,
		private array $awk,
	){
	}
}

$obj = new Hoge(123, true, [1, 2, "3rd"]);

$js = json_encode($obj);
// var_dump($js);

$obj2 = json_decode($js, true);
var_dump($obj2);
