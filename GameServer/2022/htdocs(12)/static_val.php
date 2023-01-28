<?php  // static_val.php
//
class Hoge {
    public function __construct() {
        echo "->create <br>";
    }
    public function __destruct() {
        echo "->end <br>";
    }
}
//
function bar() {
    // $obj = new Hoge();

    static $obj = null;
    if (null === $obj) {
        $obj = new Hoge();
    }
    return $obj;
}
//
echo "Trap 1 <br>";
bar();
echo "Trap 2 <br>";
bar();
echo "Trap 3 <br>";
bar();
echo "Trap 4 <br>";
