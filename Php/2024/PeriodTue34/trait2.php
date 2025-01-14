<?php // trait2.php

Trait HogeTrait {
	public function t1() {
		echo __METHOD__ , "<br>\n";
	}
	protected function t2() {
		echo __METHOD__ , "<br>\n";
	}
	private function t3() {
		echo __METHOD__ , "<br>\n";
	}

	private int $num = 123;
}

class Hoge {
	use HogeTrait;

	public function t() {
		$this->t2();
		$this->t3();
		var_dump($this->num);
	}
}

$obj = new Hoge();
$obj->t1();
$obj->t();

