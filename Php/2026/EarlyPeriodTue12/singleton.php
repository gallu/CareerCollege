<?php  // singleton.php
declare(strict_types=1);

class Hoge {
    // 外部からのnewの抑止
    private function __construct() {
    }
    // パターン１
    public static function getInstance1() : static  {
        static $obj = null;
        if (null === $obj) {
            $obj = new static();
        }
        return $obj;
    }
    // パターン２
    private static $obj = null;
    public static function getInstance2() : static  {
        if (null === static::$obj) {
            static::$obj = new static();
        }
        return static::$obj;
    }

    /* 以下、治安の悪い現場用 */
    //
    private function __clone() {
    }
    //
    public function __unserialize(array $data): void {
        throw new Exception("作るな！！");
    }
}

//
// $obj = new Hoge();
// $obj2 = new Hoge();
$obj = Hoge::getInstance1();
$obj2 = Hoge::getInstance1();
// $obj = Hoge::getInstance2();
// $obj2 = Hoge::getInstance2();
var_dump($obj, $obj2);

// $obj3 = new Hoge();
// $obj3 = clone $obj;
$s = serialize($obj);
$obj3 = unserialize($s);
var_dump($obj3);
