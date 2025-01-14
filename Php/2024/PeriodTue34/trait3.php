<?php  // trait3.php

Trait HogeTrait {
	public function  t1() {
		echo __METHOD__ , "<br>\n";
	}
}

// Fatal error: Uncaught Error: Cannot instantiate trait HogeTrait
$obj = new HogeTrait();
