<?php  // trait1.php

/*
has-a関係
酢豚 は 豚肉 を持ってる（含まれる）
人間 は 「歩く機能」 を持ってる（含まれる）
 */

Trait HogeTrait {
	public function  t1() {
		echo __METHOD__ , "<br>\n";
	}
}

class Hoge {
	use HogeTrait;
}

$obj = new Hoge();
$obj->t1();
