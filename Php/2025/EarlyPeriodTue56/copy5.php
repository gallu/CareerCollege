<?php  // copy5.php

class Hoge {
    public function __clone() {
        var_dump($this);
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge();
$obj2 = clone $obj;
var_dump($obj, $obj2);
