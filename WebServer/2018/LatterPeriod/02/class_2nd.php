<?php // class_2nd.php

class Data {
    //
    public function print() {
        echo $this->i, "\n";
    }
    //
    public function setNum($i) {
        $this->i = $i;
    }
//
private $i;
}
//
$obj = new Data();
$obj->setNum(100);

$obj2 = new Data();
$obj2->setNum(999);

//
$obj->print();
$obj2->print();
//
var_dump($obj, $obj2);

//
$obj3 = $obj;
$obj3->setNum(222);
var_dump($obj, $obj3);
//
$awk = [1,2,3];
$awk2 = $awk;
$awk2[] = 4;
var_dump($awk, $awk2);






