<?php
// 5th.php
class hoge {
  public function __set($name, $value) {
    echo "直接触るな！！！\n";
    exit;
  }
private $data;
}
$obj = new hoge();
$obj->date = 100;
var_dump($obj);

/*
class hoge {
  // setter
  public function set_data($i) {
    $this->data = $i;
  }
private $data;
}
$obj = new hoge();
$obj->set_data(100);
var_dump($obj);
*/

/*
class hoge {
  public $data;
}
$obj = new hoge();
$obj->date = 100;
var_dump($obj);
*/

/*
class hoge {
    // コンストラクタ
    public function __construct() {
        echo "__construct\n";
    }
    // デストラクタ
    public function __destruct() {
        echo "__destruct\n";
    }
}
$obj = new hoge();
*/
