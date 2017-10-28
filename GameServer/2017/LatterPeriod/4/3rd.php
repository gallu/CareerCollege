<?php
// 3rd.php
class hoge {
    public function set_pri() {
        $this->p_pri = mt_rand(1, 100);
    }
public $p_pub;
private $p_pri;
}
//
$obj = new hoge();
$obj->p_pub = 10;
//$obj->p_pri = 20;
$obj->set_pri();
var_dump($obj);
