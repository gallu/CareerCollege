<?php  // singleton3.php
declare(strict_types=1);

class Singleton {
    // これは大体必須
    private function __construct() {
    }
    public static function getInstance(): static {
        static $o = null;
        if (null === $o) {
            $o = new static();
        }
        return $o;
    }

    // 状況によりけり
    private function __clone(): void {
    }
    public function __wakeup(): void {
        throw new \Exception("アンシリアライズすんな");
    }
}
$sobj = Singleton::getInstance();
$sobj2 = Singleton::getInstance();
var_dump($sobj, $sobj2);
echo "\n";

// $sobj3 = new Singleton();
// $sobj4 = clone $sobj;
// $sobj5 = unserialize( serialize($sobj) );
// var_dump($sobj3, $sobj4, $sobj5);
