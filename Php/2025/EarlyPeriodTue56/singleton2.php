<?php  // singleton2.php
class Hoge {
    public static function getInstance(): self {
        static $o = null;
        if ($o === null) {
            $o = new self;
        }
        return $o;
    }
    //
    private function __construct() {
    }
    //
    private function __clone() {
    }
    public function __wakeup() {
        throw new Exception("すんなボケェ");
    }
}

$obj = Hoge::getInstance();
$obj2 = Hoge::getInstance();
var_dump($obj, $obj2);

// これはやめさせたい
// $obj3 = new Hoge(); // Fatal error: Uncaught Error: Call to private Hoge::__construct() from global scope in
// $obj3 = clone $obj; // Fatal error: Uncaught Error: Call to private Hoge::__clone() from global scope in
// $obj3 = unserialize(serialize($obj));
// var_dump($obj3);
