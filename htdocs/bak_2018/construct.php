<?php  // construct.php
class hoge {
    public function __construct($i, $j, $k) {
        echo "hoge construct\n";
	}
    public function __destruct() {
		echo "hoge destruct\n";
	}
}
class foo {
	// XXX 非推奨
    public function foo() {
        echo "foo construct\n";
	}
}
//
$obj = new hoge(1, 2 , 3);
echo "echo \n";
//
$obj2 = new foo();