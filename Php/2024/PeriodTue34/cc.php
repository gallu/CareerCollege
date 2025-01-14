<?php  // cc.php

class Hoge {
	public function func1() {
		echo __METHOD__ , "<br>\n";
		return $this;
	}
	public function func2() {
		echo __METHOD__ , "<br>\n";
		// return $this;
		return null;
	}
	public function func3() {
		echo __METHOD__ , "<br>\n";
		return $this;
	}
}

$obj = new Hoge();
$obj->func1();

// Chain of Responsibility 
$obj?->func1()
	?->func2()
	?->func3();


