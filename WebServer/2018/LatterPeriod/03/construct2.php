<?php // construct2.php
class hoge {
    public function __construct() {
		echo "hoge construct\n";
	}
	public function __destruct() {
		echo "hoge destruct\n";
	}
}
class foo extends hoge {
    public function __construct() {
	    parent::__construct();
		echo "foo construct\n";
	}
	public function __destruct() {
		echo "foo destruct\n";
	    parent::__destruct();
	}
}
//
$obj = new foo();