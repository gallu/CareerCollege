<?php  // magic1.php

class Hoge {
	public function __construct() {
		echo __METHOD__ , "<br> \n";
	}

	public function __destruct() {
		echo __METHOD__ , "<br> \n";
	}
}

$obj = new Hoge();
unset($obj);

echo "fin <br> \n";

