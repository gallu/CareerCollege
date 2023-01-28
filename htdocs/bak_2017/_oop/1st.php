<?php
// oop/1st.php
class hoge {
	// 関数
	public function test() {
		echo "hoge test\n";
	}
	public function status() {
		echo "hp is {$this->hp}, mp is {$this->mp}";
	}
//　変数
public $hp;
public $mp;
}
//
$obj = new hoge();
var_dump($obj);
//
$obj->hp = 100;
$obj->mp = 200;
var_dump($obj);
//
$obj->test();
$obj->status();






