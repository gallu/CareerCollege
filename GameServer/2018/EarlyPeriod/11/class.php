<?php  // class.php

// クラスの定義
class PC {
    public $str;
    public $dex;
    public $int;
    public $vit;
    public $hp;
    public $mp;
}

// クラスを使う
$obj = new PC();
$obj->hp = 10;

$obj2 = new PC();
$obj2->mp = 100;

$obj3 = new PC();
$obj3->vit = 50;

var_dump($obj, $obj2, $obj3);

