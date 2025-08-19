<?php  // serialize3.php

class Hoge {
    public function __sleep() {
        echo __METHOD__ , "<br>\n";
        return [];
    }
    public function __wakeup() {
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge();
$s = serialize($obj);
$obj2 = unserialize($s);
