<?php  // magic_invoke.php
//
class foo {
}
//
class hoge {
     //
	 public function __invoke() {
         echo "call __invoke\n";
	 }
}
//
$obj = new hoge();
$obj();
//
$obj2 = new foo();
$obj2();
