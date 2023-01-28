<?php  // static_value.php

class Hoge {
    public function __construct() {
        echo "->start <br>";
    }
    public function __destruct() {
        echo "->end <br>";
    }
}
//
function foo() {
    //$obj = new Hoge();

    static $obj = null;
    if (null === $obj) {
        $obj = new Hoge();
    }
    return $obj;
}

echo "Trap 1 <br>";
foo();
echo "Trap 2 <br>";
foo();
echo "Trap 3 <br>";
foo();
echo "Trap 4 <br>";
