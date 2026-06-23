<?php  // class9.php
declare(strict_types=1);

class Hoge {
    private int $num;
    readonly private int $price;

    public function __construct(int $num, int $price) {
        $this->num = $num;
        $this->price = $price;
    }
}

$obj = new Hoge(123, 980);
var_dump($obj);

// Fatal error: Uncaught Error: Cannot modify readonly property Hoge::$price in
$obj->__construct(321, 999);
