<?php  // trait4.php

trait HogeTrait {
	public function ttt() {
		echo __METHOD__ , "<br>";
	}
}

// Fatal error: Uncaught Error: Cannot instantiate trait HogeTrait in
$obj = new HogeTrait();

