<?php  // magic_string.php
//
class foo {
}
//
class hoge {
    public function __toString() {
        return "stringだよ！！";
	}
}
//
$obj = new hoge();
echo $obj;
//
$obj2 = new foo();
echo $obj2;
