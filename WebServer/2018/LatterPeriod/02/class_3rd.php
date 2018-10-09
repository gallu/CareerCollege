<?php // class_3rd.php

class Hoge {
    //
    public function setNum($i) {
        $this->i = $i;
    }
    public function print() {
        echo $this->i, "\n";
    }
//
private $i;
}
//
function test($obj, $awk) {
    $obj->setNum(999);
    $awk[] = 4;
}

//
$obj = new Hoge();
$obj->setNum(1);
$awk = [1,2,3];
//
test($obj, $awk);
var_dump($obj, $awk);









