<?php  // class.php
require_once( __DIR__ . '/dice.php' );

class PC {
	//
	public $hp;
	public $mp;
	public $str;
	public $dex;
}
//
$pc_1 = new PC();
$pc_1->hp = dice('5d8');
$pc_1->mp = dice('5d8');
$pc_1->str = dice('3d6');
$pc_1->dex = dice('3d6');
//
$pc_2 = new PC();
$pc_2->hp = dice('5d8');
$pc_2->mp = dice('5d8');
$pc_2->str = dice('3d6');
$pc_2->dex = dice('3d6');
//
var_dump($pc_1, $pc_2);






