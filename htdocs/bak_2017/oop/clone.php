<?php
// clone.php
class  hoge  {
	public  function  __clone() {
        $this->ins = clone $this->ins;
	}
}
class  foo  {
}
//
$obj  =  new  hoge();
$obj->ins = new  foo();
var_dump($obj);
//
$obj2  =  clone  $obj;
$obj->ins->data = 10;
var_dump($obj, $obj2);
