<?php   // Coordinate.php

class Coordinate {
    //
    public function __set($name, $value) {
        echo $name , 'は存在しません！！！';
        exit;
    }

    public $x;
    public $y;
}

//
$obj = new Coordinate();
$obj->x = 100;
$obj->y = 50;
//$obj->z = 999;
var_dump($obj);

