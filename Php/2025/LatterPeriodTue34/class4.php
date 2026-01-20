<?php  // class4.php

class Hoge {
	// 変数(プロパティ)
	// privateなので、外からはアクセスできない（classの中からだけアクセスできる)
	private int $num;

	// 関数(メソッド)
	// setXXX は、セッターと呼ばれることがある
	public function setNum(int $v): void {
		// 自身のプロパティは $this-> でアクセスする
		$this->num = $v;
	}
	// getXX は、ゲッターと呼ばれることがある
	public function getNum(): int {
		return $this->num;
	}
}

//
$obj = new Hoge();
$obj->setNum(123);
var_dump($obj);

$r = $obj->getNum();
var_dump($r);
