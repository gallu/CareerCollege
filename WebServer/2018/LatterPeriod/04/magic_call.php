<?php  // magic_call.php
//
class hoge {
    //
	public function __call($name , $arg) {
		echo "__call is \n";
        var_dump($name, $arg);
	}
	//
	public static function __callStatic($name , $arg) {
		echo "__callStatic is \n";
        var_dump($name, $arg);
	}
}
//
$obj = new hoge();
$obj->test1();
$obj->test2(1, 2, 3);
//
hoge::test3();
hoge::test4('a', 'b');
