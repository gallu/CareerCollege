<?php  // serialize4.php

class Hoge {
    public function __construct(
        private int $num,
        private string $name,
        private float $rate,
    ) {}
    
    public function __sleep() {
        echo __METHOD__ , "<br>\n";
        return [
            // "num", "name", "rate", 
            "num", // "name", "rate", 
        ];
    }
    public function __wakeup() {
        echo __METHOD__ , "<br>\n";
    }
}

$obj = new Hoge(num: 123, name: "name", rate: 3.14);
$s = serialize($obj);
$obj2 = unserialize($s);
var_dump($obj2);
