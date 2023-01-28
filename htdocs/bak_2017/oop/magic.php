<?php
// magic.php
class  hoge  {
	// コンストラクタ
	public  function  __construct() {
        //echo "call __construct\n";
	}
	// デストラクタ
	public  function  __destruct() {
        //echo "call __destruct\n	";
	}
	//
	public  function  __toString() {
        return "hoge class!!\n";
	}
	//
	public  function  __clone() {
        echo  "call __clone\n";
	}
	//
	public  function  __set($key, $value) {
        //echo "key:{$key} , value:{$value}\n";
        //$this->$key  =  $value;
        throw  new  ErrorException("代入禁止!!!!!!");
	}
//private $data;
}
//
$obj = new hoge();
//echo $obj;
// clone
//$obj2 = $obj;
//$obj2 = clone $obj;
//var_dump($obj, $obj2);

// set
//$obj->data = 10;
//var_dump($obj);

