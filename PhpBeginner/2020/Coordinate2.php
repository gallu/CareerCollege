<?php   // Coordinate2.php
// http://dev2.m-fr.net/アカウント名/Coordinate2.php

class Coordinate {
    // コンストラクタ
    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

private $x;
private $y;
}

$obj = new Coordinate(10, 20);
var_dump($obj);
//$obj->x = 100;

