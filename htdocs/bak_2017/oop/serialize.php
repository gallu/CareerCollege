<?php
// serialize.php
class  hoge  {
	public  function  __sleep() {
        echo  "call __sleep\n";
        return ['aaa', 'bbb'];
	}
	public  function  __wakeup() {
        echo  "call __wakeup\n";
	}
}
//
$obj = new hoge();
$obj->aaa = 10;
$obj->bbb = 20;
$obj->ccc = 30;
var_dump($obj);

$s = serialize($obj);
var_dump($s);
$obj2 = unserialize($s);
var_dump($obj2);
