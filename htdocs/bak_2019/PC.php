<?php  // PC.php

class PC {
	//
	public function __construct($hp, $mp) {
		$this->MaxHP = $this->HP = $hp;
		$this->MaxMP = $this->MP = $mp;
		// 回復アイテム使いたいのでダメージを負っておく
		$this->HP = $this->HP - mt_rand(200, $this->MaxHP);
		$this->MP = $this->MP - mt_rand(200, $this->MaxMP);
	}
	//
	public function output() {
		echo "HP: {$this->HP}/{$this->MaxHP}<br>\n";
		echo "MP: {$this->MP}/{$this->MaxMP}<br>\n";
		echo "<br>\n";
	}
	// 回復用
	public function healHP($i) {
		$this->HP += $i;
		if ($this->MaxHP < $this->HP) {
			$this->HP = $this->MaxHP;
		}
	}
	public function healMP($i) {
		$this->MP += $i;
		if ($this->MaxMP < $this->MP) {
			$this->MP = $this->MaxMP;
		}
	}

//
private $HP;
private $MaxHP;
private $MP;
private $MaxMP;
}
