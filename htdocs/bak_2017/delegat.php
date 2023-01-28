<?php // delegat.php
class hoge {
  public function __construct(foo $obj){
    $this->foo_obj = $obj;
  }
  public function __call($name ,$arguments) {
    echo "hoge#__call<br>\n";
    $this->foo_obj->$name();
  }
//
private $foo_obj;
}
//
class foo {
  public function test() {
    echo "dele foo#test\n";
  }
}
//
$obj = new hoge(new foo());
$obj->test();
