<?php  // magic5.php

class Hoge {
	public function __invoke(): void {
		echo __METHOD__ ;
	}
}

$obj = new Hoge();
$obj();
