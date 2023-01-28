<?php  // magic_clone.php
//
class hoge {
    public function __clone() {
        echo "call __clone\n";
	}
}
//
$obj = new hoge();
$obj2 = clone $obj;
