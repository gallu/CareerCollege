<?php  // class_2.php
//  http://dev2.m-fr.net/XXXXXX/class_2.php

class PC {
    //
    public function setName($v) {
        $this->name = $v;
    }
    public function getName() {
        return $this->name;
    }

private $name = '不明';
private $job = '見習い';
}
//
$pc = new PC();
$pc->setName('おいちゃん');
var_dump($pc->getName());

