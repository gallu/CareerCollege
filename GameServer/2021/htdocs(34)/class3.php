<?php   // class3.php

class PC {
	//
	public function __set($name, $value) {
		echo '直接書き込むんじゃねぇ！！！';
		exit;
	}
	public function __get($name) {
		echo '直接読み込むんじゃねぇ！！！';
		exit;
	}
	
	//
	public function setHp($i) {
		$this->hp = $i;
	}
	public function getHp() {
		return $this->hp;
	}

private $hp;
private $mp;
}

//
$pc_1 = new PC();
$pc_1->setHp(100);
echo $pc_1->getHp() , "<br>";
// XXX
$pc_1->str = 100;
var_dump($pc_1);






