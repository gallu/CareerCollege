<?php  // static1.php

class Hoge {
	public static function func() {
		// var_dump($this); // Fatal error: Uncaught Error: Using $this when not in object context 
		echo __METHOD__ , "<br> \n";
	}
}

Hoge::func();

