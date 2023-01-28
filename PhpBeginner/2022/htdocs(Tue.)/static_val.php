<?php  // static_val.php

class myClass {
    public function __construct() {
        echo "--start ! <br>";
    }
    public function __destruct() {
        echo "--end ! <br>";
    }
}

function hoge() {
    static $obj = null;
    if (null === $obj) {
        $obj = new myClass();
    }
}

echo "Trap 1 <br>";
hoge();
echo "Trap 2 <br>";
hoge();
echo "Trap 3 <br>";
hoge();
echo "Trap 4 <br>";


